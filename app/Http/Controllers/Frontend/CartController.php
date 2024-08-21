<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Course;
use App\Models\Course_goal;
use App\Models\CourseSection;
use App\Models\CourseLecture;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\Orderconfirm;
use Stripe;
use App\Models\User;
use App\Notifications\OrderComplete;
use Illuminate\Support\Facades\Notification;
use App\Models\Midtrans;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id){

        $course = Course::find($id);

        if (Session::has('coupon')) {
            Session::forget('coupon');
        }

        // Check if the course is already in the cart
        $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if ($cartItem->isNotEmpty()) {
            return response()->json(['error' => 'Course is already in your cart']);
        }

        if ($course->discount_price == NULL) {

            Cart::add([
                'id' => $id, 
                'name' => $request->course_name, 
                'qty' => 1, 
                'price' => $course->selling_price, 
                'weight' => 1, 
                'options' => [
                    'image' => $course->course_image,
                    'slug' => $request->course_name_slug,
                    'instructor' => $request->instructor,
                ],
            ]); 

        }else{

            Cart::add([
                'id' => $id, 
                'name' => $request->course_name, 
                'qty' => 1, 
                'price' => $course->discount_price, 
                'weight' => 1, 
                'options' => [
                    'image' => $course->course_image,
                    'slug' => $request->course_name_slug,
                    'instructor' => $request->instructor,
                ],
            ]);  
        }

        return response()->json(['success' => 'Successfully Added on Your Cart']); 

    }// End Method 


    public function CartData(){

        $carts = Cart::content();
        $cartTotal = Cart::total();
        $cartQty = Cart::count();

        return response()->json(array(
            'carts' => $carts,
            'cartTotal' => $cartTotal,
            'cartQty' => $cartQty,
        ));

    }// End Method 


    public function AddMiniCart(){

        $carts = Cart::content();
        $cartTotal = Cart::total();
        $cartQty = Cart::count();

        return response()->json(array(
            'carts' => $carts,
            'cartTotal' => $cartTotal,
            'cartQty' => $cartQty,
        ));

    }// End Method 


    public function RemoveMiniCart($rowId){

        Cart::remove($rowId);
        return response()->json(['success' => 'Course Remove From Cart']);

    }// End Method 


    public function MyCart(){

        return view('frontend.mycart.view_mycart');

    } // End Method 


    public function GetCartCourse(){

        $carts = Cart::content();
        $cartTotal = Cart::total();
        $cartQty = Cart::count();

        return response()->json(array(
            'carts' => $carts,
            'cartTotal' => $cartTotal,
            'cartQty' => $cartQty,
        ));

    }// End Method 

    public function CartRemove($rowId){

        Cart::remove($rowId);

        if (Session::has('coupon')) {
           $coupon_name = Session::get('coupon')['coupon_name'];
           $coupon = Coupon::where('coupon_name',$coupon_name)->first();

           Session::put('coupon',[
            'coupon_name' => $coupon->coupon_name,
            'coupon_discount' => $coupon->coupon_discount,
            'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100),
            'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100 )
        ]);

        }
        return response()->json(['success' => 'Course Remove From Cart']);

    }// End Method 


    public function CouponApply(Request $request){

        $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first(); 

        if ($coupon) {
            Session::put('coupon',[
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100 )
            ]);

            return response()->json(array(
                'validity' => true,
                'success' => 'Coupon Applied Successfully'
            ));
            
        }else {
            return response()->json(['error' => 'Invaild Coupon']);
        }

    }// End Method 


    public function InsCouponApply(Request $request){

        $coupon = Coupon::where('coupon_name',$request->coupon_name)->where('coupon_validity','>=',Carbon::now()->format('Y-m-d'))->first(); 

        if ($coupon) {
            if ($coupon->course_id == $request->course_id && $coupon->instructor_id == $request->instructor_id) {

                Session::put('coupon',[
                    'coupon_name' => $coupon->coupon_name,
                    'coupon_discount' => $coupon->coupon_discount,
                    'discount_amount' => round(Cart::total() * $coupon->coupon_discount/100),
                    'total_amount' => round(Cart::total() - Cart::total() * $coupon->coupon_discount/100 )
                ]);
    
                return response()->json(array(
                    'validity' => true,
                    'success' => 'Coupon Applied Successfully'
                )); 
                 
            } else {
                return response()->json(['error' => 'Coupon Criteria Not Met for this course and instructor']);
            }
        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }

    }// End Method 





    public function CouponCalculation(){

        if (Session::has('coupon')) {
           return response()->json(array(
            'subtotal' => Cart::total(),
            'coupon_name' => session()->get('coupon')['coupon_name'],
            'coupon_discount' => session()->get('coupon')['coupon_discount'],
            'discount_amount' => session()->get('coupon')['discount_amount'],
            'total_amount' => session()->get('coupon')['total_amount'],
           ));
        } else{
            return response()->json(array(
                'total' => Cart::total(),
            ));
        }

    }// End Method 


    public function CouponRemove(){

        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Remove Successfully']);

    }// End Method 



    public function CheckoutCreate(){

        if (Auth::check()) {
            
            if (Cart::total() > 0) {
                $carts = Cart::content();
                $cartTotal = Cart::total();
                $cartQty = Cart::count();

                return view('frontend.checkout.checkout_view',compact('carts','cartTotal','cartQty'));
            } else{

                $notification = array(
                    'message' => 'Add At list One Course',
                    'alert-type' => 'error'
                );
                return redirect()->to('/')->with($notification); 

            }

        }else{

            $notification = array(
                'message' => 'You Need to Login First',
                'alert-type' => 'error'
            );
            return redirect()->route('login')->with($notification); 

        }

    }// End Method 


    public function Payment(Request $request)
    {
        $user = User::where('role', 'instructor')->get();

        // Mendapatkan total amount
        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
            $total_amount = round(Cart::total());
        }

        // Data untuk payment
        $paymentData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'course_title' => $request->course_title,
        ];

        $cartTotal = Cart::total();
        $carts = Cart::content();

        // Handle Midtrans payment
        $order_id = Str::uuid();
        
        // Tentukan nilai tukar USD ke IDR
        $usd_to_idr_rate = 15000; // Misalnya, 1 USD = 15.000 IDR

        // Hitung jumlah total dalam IDR
        $total_amount_idr = $total_amount * $usd_to_idr_rate;

        // Detail item untuk Midtrans
        $item_details = [];
        foreach ($carts as $item) {
            $item_details[] = [
                'id' => 'ITEM_' . $item->id, // ID unik item
                'price' => $item->price * $usd_to_idr_rate, // Harga dalam IDR
                'quantity' => $item->qty, // Jumlah item
                'name' => substr($item->name, 0, 50), // Nama item, maksimal 100 karakter
            ];
        }

        // Hitung total dari item_details
        $calculated_total = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $item_details));

        // Parameter untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $calculated_total, // Jumlah total dalam IDR, sesuai dengan item_details
            ],
            'item_details' => $item_details,
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'billing_address' => [
                    'first_name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    // Tambahkan detail alamat lain jika diperlukan
                ],
                'shipping_address' => [ // Opsional, jika Anda memerlukan alamat pengiriman
                    'first_name' => $request->name,
                    'address' => $request->address,
                    // Tambahkan detail alamat lain jika diperlukan
                ],
            ],
            'enabled_payments' => ['bca_va', 'credit_card', 'bri_va'], // Metode pem    bayaran yang diaktifkan
        ];

        // Authorization header menggunakan base64 encoding dari server key Midtrans
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $auth,
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

        $responseBody = json_decode($response->body());

        // return view(dd($responseBody));

        // Simpan data pembayaran ke database
        $payment = new Midtrans();
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->address = $request->address;
        $payment->total_amount = $total_amount_idr;
        $payment->payment_type = 'Midtrans';
        $payment->invoice_no = $order_id;
        $payment->order_date = now()->format('Y-m-d');
        $payment->order_month = now()->format('m');
        $payment->order_year = now()->format('Y');
        $payment->status = 'pending';
        $payment->save();

        foreach ($request->course_title as $key => $course_title) {
            $existingOrder = Order::where('user_id', Auth::user()->id)
                                  ->where('course_id', $request->course_id[$key])
                                  ->first();

            if ($existingOrder) {
                $notification = [
                    'message' => 'You Have already enrolled in this course',
                    'alert-type' => 'error'
                ];
                return redirect()->back()->with($notification);
            }

            $order = new Order();
            $order->payment_id = $payment->id;
            $order->user_id = Auth::user()->id;
            $order->course_id = $request->course_id[$key];
            $order->instructor_id = $request->instructor_id[$key];
            $order->course_title = $course_title;
            $order->price = $request->price[$key];
            $order->save();
        }

        $request->session()->forget('cart');

        // Send email to student
        $sendmail = Midtrans::find($payment->id);
        $mailData = [
            'invoice_no' => $sendmail->invoice_no,
            'amount' => $total_amount,
            'name' => $sendmail->name,
            'email' => $sendmail->email,
        ];
        Mail::to($request->email)->send(new Orderconfirm($mailData));

        // Send notification
        Notification::send($user, new OrderComplete($request->name));

        // Arahkan pengguna ke halaman Midtrans
        return redirect($responseBody->redirect_url);
    }



    public function StripeOrder(Request $request){
        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
         }else {
             $total_amount = round(Cart::total());
         }

         \Stripe\Stripe::setApiKey('sk_test_51IUTWzALc6pn5BvMjaRW9STAvY4pLiq1dNViHoh5KtqJc9Bx7d4WKlCcEdHOJdg3gCcC2F19cDxUmCBJekGSZXte00RN2Fc4vm');

         $token = $_POST['stripeToken'];

         $charge = \Stripe\Charge::create([
            'amount' => $total_amount*100, 
            'currency' => 'usd',
            'description' => 'Lms',
            'source' => $token,
            'metadata' => ['order_id' => '3434'],
         ]); 

         $order_id = Payment::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total_amount' => $total_amount,
            'payment_type' => 'Stripe',
            'invoice_no' => 'EOS' . mt_rand(10000000, 99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(), 

         ]);

         $carts = Cart::content();
         foreach ($carts as $cart) {
            Order::insert([
                'payment_id' => $order_id,
                'user_id' => Auth::user()->id,
                'course_id' => $cart->id,
                'instructor_id' => $cart->options->instructor,
                'course_title' => $cart->options->name,
                'price' => $cart->price,
            ]);
         }// end foreach 

         if (Session::has('coupon')) {
            Session::forget('coupon');
         }
         Cart::destroy();

         $notification = array(
            'message' => 'Stripe Payment Submit Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('index')->with($notification); 

    }// End Method 



    public function BuyToCart(Request $request, $id){

        $course = Course::find($id); 
      
        // Check if the course is already in the cart
        $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if ($cartItem->isNotEmpty()) {
            return response()->json(['error' => 'Course is already in your cart']);
        }

        if ($course->discount_price == NULL) {

            Cart::add([
                'id' => $id, 
                'name' => $request->course_name, 
                'qty' => 1, 
                'price' => $course->selling_price, 
                'weight' => 1, 
                'options' => [
                    'image' => $course->course_image,
                    'slug' => $request->course_name_slug,
                    'instructor' => $request->instructor,
                ],
            ]); 

        }else{

            Cart::add([
                'id' => $id, 
                'name' => $request->course_name, 
                'qty' => 1, 
                'price' => $course->discount_price, 
                'weight' => 1, 
                'options' => [
                    'image' => $course->course_image,
                    'slug' => $request->course_name_slug,
                    'instructor' => $request->instructor,
                ],
            ]);  
        }

        return response()->json(['success' => 'Successfully Added on Your Cart']); 

    }// End Method 

    public function MarkAsRead(Request $request, $notificationId){

        $user = Auth::user();
        $notification = $user->notifications()->where('id',$notificationId)->first();

        if ($notification) {
            $notification->markAsRead();

        }
        return response()->json(['count' => $user->unreadNotifications()->count()]);

    }// End Method 





}
 