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

        return view('frontend.wishlist.all_wishlist');

    }// End Method


    public function GetWishlistCourse(){

        $wishlist = Wishlist::with('course')->where('user_id',Auth::id())->latest()->get();

        $wishQty = Wishlist::count();

        return response()->json(['wishlist' => $wishlist, 'wishQty' => $wishQty]);

    }// End Method

    public function RemoveWishlist($id)
    {
        if (Auth::check()) {
            // Hapus wishlist berdasarkan user dan course ID
            $deleted = Wishlist::where('user_id', Auth::id())
                ->where('course_id', $id)
                ->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Successfully removed from your Wishlist',
                    'wishlist_count' => Wishlist::where('user_id', Auth::id())->count(), // Total wishlist setelah penghapusan
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
