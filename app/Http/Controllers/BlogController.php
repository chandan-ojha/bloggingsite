<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('website.blogdetails');
    }

    public function createBlog()
    {
        return view('website.createblog');
    }

    public function storeBlog(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image'=> 'required|mimes:jpeg,png',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,

        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->extension();
            $image->move('storage/blogs/', $image_new_name);
            $blog->image = 'blogs/' . $image_new_name;
            $blog->save();
        }

        session()->flash('message','Blog has been created successfully!');
        return redirect()->back();

    }
    
}
