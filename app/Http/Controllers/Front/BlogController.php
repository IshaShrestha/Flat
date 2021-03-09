<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $pages=Page::all();
        $categories=Category::all();
        $posts=Post::all();
        return view('front.blog.index',compact('pages','categories','posts'));
    }

    public function readPost($url_slug){

        $post=Post::where('url_slug',$url_slug)->first();
        $pages=Page::all();
        $categories=Category::all();
        return view('front.blog.view',compact('post','pages','categories'));
    }
}
