<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function show()
    {
        return view('blog-details');
    }

    public function blog_details2()
    {
        return view('blog-details2');
    }

    public function blog_details3()
    {
        return view('blog-details3');
    }
}
