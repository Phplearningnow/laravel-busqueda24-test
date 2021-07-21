<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function inicio() {
       // $blogs = Blog::all();
        $blogs = Blog::latest()->get();
        return view('blogs.inicio', compact('blogs'));
    }
}


