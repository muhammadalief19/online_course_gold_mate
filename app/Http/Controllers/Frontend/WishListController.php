<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Course;
use App\Models\User;
use App\Models\Wishlist;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WishListController extends Controller
{
    public function AddToWishList($course_id)
    {
        if (Auth::check()) {
            // Periksa apakah wishlist sudah ada
            $exists = Wishlist::where('user_id', Auth::id())->where('course_id', $course_id)->first();

            if (!$exists) {
                // Tambahkan course ke wishlist
                Wishlist::create([
                    'user_id' => Auth::id(),
                    'course_id' => $course_id,
                    'created_at' => now(),
                ]);

                // Kembalikan respon JSON berhasil
                return response()->json([
                    'success' => true,
                    'message' => 'Successfully added to your Wishlist',
                    'wishlist_count' => Wishlist::where('user_id', Auth::id())->count(), // Opsional: Total wishlist
                ]);
            }
        } else {
            // Kembalikan respon JSON jika user belum login
            return response()->json([
                'success' => false,
                'message' => 'Please login to add items to your Wishlist',
            ]);
        }
    }



    public function AllWishlist(){
        $courses = Course::get();
        $wishlist = Wishlist::whereIn('course_id', $courses->pluck('id'))
        ->get()
        ->pluck('course_id')
        ->toArray(); // List of course_ids in the wishlist
        return view('frontend.wishlist.all_wishlist');

    }// End Method


    public function GetWishlistCourse()
{
    // Ambil semua wishlist untuk pengguna yang sedang login
    $wishlist = Wishlist::where('user_id', auth()->id()) // Pastikan menggunakan user_id yang sesuai
                        ->with('course') // Ambil detail kursus
                        ->get();

    // Format data untuk JSON response
    $response = [
        'wishQty' => $wishlist->count(),
        'wishlist' => $wishlist->map(function ($item) {
            return [
                'id' => $item->course->id,
                'course' => [
                    'id' => $item->course->id,
                    'course_name' => $item->course->course_name,
                    'course_name_slug' => $item->course->course_name_slug,
                    'course_image' => $item->course->course_image,
                    'label' => $item->course->label,
                    'selling_price' => $item->course->selling_price,
                    'discount_price' => $item->course->discount_price,
                    'lectures' => $item->course->lectures,
                    'duration' => $item->course->duration,
                    'students' => $item->course->students,
                ]
            ];
        }),
        'wishlistIds' => $wishlist->pluck('course_id')->toArray(), // Untuk cek status wishlist di frontend
    ];

    return response()->json($response);
}


public function RemoveWishlist($id)
{
    if (Auth::check()) {
        // Hapus wishlist berdasarkan user dan course ID
        $deleted = Wishlist::where('user_id', Auth::id())
            ->where('course_id', $id)
            ->delete();
        
        $count = Wishlist::where('user_id', Auth::id())->count(); // Hitung ulang wishlist
        
        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully removed from your Wishlist',
                'wishlist_count' => $count, // Total wishlist setelah penghapusan
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to remove item from Wishlist',
            ]);
        }
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Please login to manage your Wishlist',
        ]);
    }
}



}