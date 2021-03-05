<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\AddTemplateRequest;
use App\Models\Newsletter;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TemplateController extends Controller
{
    public function create(){

        $templates= Template::all();

        return view('back.newsletter.template.create', compact('templates'));
    }

    public function store(AddTemplateRequest $request){
//        dd($request);
        Template::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'subject'=>$request->subject,
            'description'=>$request->description,
            'user_id'=>auth()->id()

        ]);

        return redirect()->back()->with('success','Template added successfully');
    }

    public function index(){



    }
}
