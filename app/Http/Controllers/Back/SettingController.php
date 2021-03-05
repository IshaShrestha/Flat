<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class SettingController extends Controller
{
    public function create(){
        return view('back.setting.create');
    }

    public function store(AddSettingRequest $request){

        if($request->hasFile('image')){

            $extension= $request->file('image')->getClientOriginalExtension();
            $filename= Str::random(6).'.'.$extension;
            $request->file('image')->storeAs('/public/setting', $filename);

        }else{
            $path=null;
        }

        Setting::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'meta_title'=> $request->meta_title,
            'meta_description'=>$request->meta_description,
            'primary_email'=>$request->primary_email,
            'secondary_email'=>$request->secondary_email,
            'haunting_line'=>$request->haunting_line,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'image'=>$request->filename,
            'user_id'=>auth()->id()

        ]);

        return redirect()->back()->with('success','Setting updated successfully');
    }
}
