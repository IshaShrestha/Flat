<?php

namespace App\Http\Controllers\Back;



use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('back.dashboard');
    }
}
