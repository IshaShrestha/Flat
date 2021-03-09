<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $pages=Page::all();
        return view('front.welcome',compact('pages'));
    }


}
