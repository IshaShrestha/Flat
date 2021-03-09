<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('back.blog.post.index',compact('posts'));
    }
    public function create(){

        $categories=Category::all();
        return view('back.blog.post.create', compact('categories'));
    }

    public function store(AddPostRequest $request){

        $category = Category::where('slug',$request->category)->first();

        if ($request->hasFile('image')) {

            $extension= $request->file('image')->getClientOriginalExtension();
            $filename= Str::random(6).'.'.$extension;
            $request->file('image')->storeAs('/public/post', $filename);

        }

        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'url_slug'=>isset($request->url_slug)?$request->url_slug:Str::slug($request->title,'-'),
            'status'=>$request->status,
            'category_id'=>$category->id,
            'feature'=>$request->has('feature'),
            'image'=>$request->hasFile('image')?$filename:null,
            'post_description'=>$request->post_description,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Post added successfully');


    }

    public function edit($url_slug){

        $post= Post::where('url_slug', $url_slug)->first();
        $category = Category::where('slug')->first();
        $categories=Category::all();

        return view('back.blog.post.update', compact('post','categories','category'));

    }

    public function update(AddPostRequest $request, $url_slug){

        $post= Post::where('url_slug', $url_slug)->first();
        $category=Category::where('slug',$request->category)->first();
        if ($request->hasFile('image')) {

            $extension= $request->file('image')->getClientOriginalExtension();
            $filename= Str::random(6).'.'.$extension;
            $request->file('image')->storeAs('/public/post', $filename);

        }

        $post->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'url_slug'=>isset($request->url_slug)?$request->url_slug:Str::slug($request->title,'-'),
            'status'=>$request->status,
            'category_id'=>$category->id,
            'feature'=>$request->has('feature'),
            'image'=>$request->hasFile('image')?$filename:null,
            'post_description'=>$request->post_description,

        ]);

        return redirect()->route('post.index')->with('success','Post updated successfully');


    }



    public function destroy(Request $request){
        $page= Post::where('url_slug', $request->url_slug)->first();
        $page->delete();

        return redirect()->back()->with('success','Page deleted successfully');
    }




}
