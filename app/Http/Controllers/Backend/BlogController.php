<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class BlogController extends Controller
{
   public function AllBlogCategory(){

    $category = BlogCategory::latest()->get();
    return view('admin.backend.blogcategory.blog_category',compact('category'));

   }// End Method

   public function StoreBlogCategory(Request $request){

    BlogCategory::insert([
        'category_name' => $request->category_name,
        'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
    ]);

    $notification = array(
        'message' => 'BlogCategory Inserted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


   }// End Method


   public function EditBlogCategory($id){

    $categories = BlogCategory::find($id);
    return response()->json($categories);

   }// End Method


   public function UpdateBlogCategory(Request $request){
    $cat_id = $request->cat_id;

    BlogCategory::find($cat_id)->update([
        'category_name' => $request->category_name,
        'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
    ]);

    $notification = array(
        'message' => 'BlogCategory Updated Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


   }// End Method

   public function DeleteBlogCategory($id){

    BlogCategory::find($id)->delete();

    $notification = array(
        'message' => 'BlogCategory Deleted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


   }// End Method

   //////////// All Blog Post Method .//

   public function BlogPost(){
    $post = BlogPost::latest()->get();
    return view('admin.backend.post.all_post',compact('post'));
   }// End Method


   public function AddBlogPost(){

    $blogcat = BlogCategory::latest()->get();
    return view('admin.backend.post.add_post',compact('blogcat'));

   }// End Method

   public function StoreBlogPost(Request $request){

    $image = $request->file('post_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(370,247)->save('upload/post/'.$name_gen);
    $save_url = 'upload/post/'.$name_gen;

    BlogPost::insert([
        'blogcat_id' => $request->blogcat_id,
        'post_title' => $request->post_title,
        'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
        'long_descp' => $request->long_descp,
        'post_tags' => $request->post_tags,
        'post_image' => $save_url,
        'created_at' => Carbon::now(),

    ]);

    $notification = array(
        'message' => 'Blog Post Inserted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('blog.post')->with($notification);

   }// End Method

   public function EditBlogPost($id){

    $blogcat = BlogCategory::latest()->get();
    $post = BlogPost::find($id);
    return view('admin.backend.post.edit_post',compact('post','blogcat'));

   }// End Method


   public function UpdateBlogPost(Request $request){

    $post_id = $request->id;

    if ($request->file('post_image')) {

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,247)->save('upload/post/'.$name_gen);
        $save_url = 'upload/post/'.$name_gen;

        BlogPost::find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
            'long_descp' => $request->long_descp,
            'post_tags' => $request->post_tags,
            'post_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Blog Post Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.post')->with($notification);

    } else {

        BlogPost::find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
            'long_descp' => $request->long_descp,
            'post_tags' => $request->post_tags,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Blog Post Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.post')->with($notification);

    } // end else

}// End Method


public function DeleteBlogPost($id){

    $item = BlogPost::find($id);
    $img = $item->post_image;
    unlink($img);

    BlogPost::find($id)->delete();

        $notification = array(
            'message' => 'Blog Post Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

}// End Method

public function BlogDetails($slug){

    $blog = BlogPost::where('post_slug',$slug)->first();
    $tags = $blog->post_tags;
    $tags_all = explode(',',$tags);
    $bcategory = BlogCategory::latest()->get();
    $post = BlogPost::latest()->limit(4)->get();
    return view('frontend.blog.blog_details',compact('blog','tags_all','bcategory','post'));

}// End Method

public function BlogCatList($id) {
    $blog = BlogPost::where('blogcat_id', $id)->get();
    $breadcat = BlogCategory::find($id); 
    $bcategory = BlogCategory::latest()->get();
    $post = BlogPost::latest()->limit(4)->get();

    
    $blogs = BlogPost::all();
    $tags_all = $this->getAllTags($blogs);

    return view('frontend.blog.blog_cat_list', compact('blog', 'breadcat', 'bcategory', 'post', 'tags_all'));
}

public function BlogList(Request $request) {
    $tag = $request->get('tag');
    $search = $request->get('search'); 

    $query = BlogPost::with('blog')->latest();

    if ($tag) {
        $query->where('post_tags', 'LIKE', "%$tag%");
    }

    if ($search) {
        $query->where('post_title', 'LIKE', "%$search%");
    }

    $blog = $query->paginate(9);

    $blogs = BlogPost::all();

    $tags_all = $this->getAllTags($blogs);

    $bcategory = BlogCategory::latest()->get();
    $post = BlogPost::latest()->limit(4)->get();
    
    return view('frontend.blog.blog_list', compact('blog', 'bcategory', 'post', 'tags_all'));
}

private function getAllTags($blogs) {
    $tags_all = [];

    foreach ($blogs as $blogPost) {
        if (!empty($blogPost->post_tags)) {
            $tags = explode(',', $blogPost->post_tags);
            $tags_all = array_merge($tags_all, $tags);
        }
    }

    return array_unique($tags_all);
}

}
