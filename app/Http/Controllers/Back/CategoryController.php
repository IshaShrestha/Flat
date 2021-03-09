<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('back.blog.category.index',compact('categories'));
    }
    public function create(){
        $categories=Category::all();
        return view('back.blog.category.create',compact('categories'));
    }

    public function store(AddCategoryRequest $request){
        if(isset($request->parent)){
            $category=Category::where('slug', $request->parent)->first();
            $parentId=$category->id;
        }
        else{
            $parentId=null;
        }

        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'category_id'=>$parentId,
            'description'=>$request->description,
            'user_id' => auth()->id()

        ]);

        return redirect()->route('category.index')->with('success','Category added successfully');

    }

    public function edit($slug){

        $category = Category::where('slug',$slug)->first();
        if(!$category){
            abort(404);
        }
        $categories = Category::all();
        return view('back.blog.category.update', compact('category','categories'));

    }

    public function update(AddCategoryRequest $request, $slug){

        $category= Category::where('slug',$slug)->first();

        if(isset($request->parent)){
            $category=Category::where('slug', $request->parent)->first();
            $parentId=$category->id;
        }
        else{
            $parentId=null;
        }

        $category->update([

            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'category_id'=>$parentId,
            'description'=>$request->description,

        ]);


        return redirect()->route('category.index')->with('success','Category successfully updated');




    }

    public function destroy(Request $request){
        $category = Category::where('slug',$request->slug)->first();
        $category->delete();

        return redirect()->back()->with('success','Product deleted successfully');
    }






}
