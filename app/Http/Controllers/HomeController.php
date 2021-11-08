<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('website.home',compact('blogs'));
    }
}
