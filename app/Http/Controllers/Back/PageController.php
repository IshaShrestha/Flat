<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPageRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public  function index(){
        $pages=Page::all();
        return view('back.cms.page.index', compact('pages'));
    }
    public function create(){
        return view('back.cms.page.create');
    }

    public function store(AddPageRequest $request){

        Page::Create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title,'-'),
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'tags'=>$request->tags,
            'description'=>$request->description,
            'create_menu'=>$request->has('create_menu'),
            'publish'=>$request->has('publish'),
            'menu_name'=>$request->has('create_menu')?$request->menu_name:null,
            'user_id'=>auth()->id()
        ]);
        return redirect()->route('page.index')->with('success','Page created successfully');
    }

    public function edit($slug){
        $page= Page::where('slug', $slug)->first();
        return view('back.cms.page.update', compact('page'));
    }

    public function update(AddPageRequest $request, $slug){



        $page= Page::where('slug',$slug)->first();

        $page->update([

            'title'=>$request->title,
            'slug'=>Str::slug($request->title,'-'),
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'tags'=>$request->tags,
            'description'=>$request->description,
            'create_menu'=>$request->has('create_menu'),
            'publish'=>$request->has('publish'),
            'menu_name'=>$request->has('menu_name')?$request->menu_name:null,
        ]);

        return redirect()->route('page.index');

    }

    public function getAllPages(Request  $request)
    {
        $page = Page::all();
        return response()->json(['pages'=>$page],200);
    }

    public function destroy(Request $request){
        $page= Page::where('slug', $request->slug)->first();
        $page->delete();

        return redirect()->back()->with('success','Page deleted successfully');
    }
}
