<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewsRequest;
use App\Models\Newsletter;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
 public function create(){

     $templates=Template::all();
     return view('back.newsletter.sendnewsletter.create')->with('templates', $templates);
 }

 public function fetch(Request $request ){

        $data=Template::select('subject','description')->where('slug',$request->template)->first();
        return response()->json($data);

 }




}
