<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front-end.home.home');
    }
    public function blog()
    {
        return view('front-end.blog.blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function blogDetails($id)
    {
        return view('front-end.blog.blog-details',[
            'blog'=>Blog::find($id)
        ]);
    }
}
