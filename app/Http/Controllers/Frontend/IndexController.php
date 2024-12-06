<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Course;
use App\Models\User;
use App\Models\Course_goal;
use App\Models\Wishlist;
use App\Models\CourseSection;
use App\Models\CourseLecture;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function CourseDetails($id,$slug){

        $course = Course::find($id);
        $goals = Course_goal::where('course_id',$id)->orderBy('id','DESC')->get();

        $ins_id = $course->instructor_id;
        $instructorCourses = Course::where('instructor_id',$ins_id)->orderBy('id','DESC')->get();

        $categories = Category::latest()->get();
        $labels = Course::select('label', DB::raw('COUNT(*) as count'))
                    ->where('status', '1')
                    ->groupBy('label')
                    ->get();

        // Mengambil category_name dari tabel categories berdasarkan course->category_id
        $category_name = Category::where('id', $course->category_id)->pluck('category_name')->first();

        $cat_id = $course->category_id;
        $relatedCourses = Course::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(3)->get();

        return view('frontend.course.course_details',compact('course','goals','instructorCourses','categories','relatedCourses','labels','category_name'));

    } // End Method

    public function CategoryCourse($id, $slug){

        $courses = Course::where('category_id',$id)->where('status','1')->get();
        $wishlist = Wishlist::whereIn('course_id', $courses->pluck('id'))
                        ->get()
                        ->pluck('course_id')
                        ->toArray(); // List of course_ids in the wishlist
                        
        $labels = Course::select('label', DB::raw('COUNT(*) as count'))
                    ->where('status', '1')
                    ->groupBy('label')
                    ->get();
        $category = Category::where('id',$id)->first();
        $categories = Category::latest()->get();
        // return view('frontend.category.category_all',compact('courses','category','categories','labels'));
        return view('frontend.category.category_all',compact('courses','category','categories','labels','wishlist'));
    }// End Method


    public function SubCategoryCourse($id, $slug){
        $courses = Course::where('subcategory_id',$id)->where('status','1')->get();
        $labels = Course::select('label', DB::raw('COUNT(*) as count'))
                    ->where('status', '1')
                    ->groupBy('label')
                    ->get();
        $subcategory = SubCategory::where('id',$id)->first();
        $categories = Category::latest()->get();
        return view('frontend.category.subcategory_all',compact('courses','subcategory','categories','labels'));
    }// End Method


    public function InstructorDetails($id){
        $instructor = User::find($id);
        $courses = Course::where('instructor_id',$id)->get();
        return view('frontend.instructor.instructor_details',compact('instructor','courses'));

    }// End Method



}
