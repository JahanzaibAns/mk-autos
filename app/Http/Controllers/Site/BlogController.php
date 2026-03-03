<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;



class BlogController extends Controller
{
    public function ourBlogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('blogs', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blog-details', compact('blog'));
    }

   

}
