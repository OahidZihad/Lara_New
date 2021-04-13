<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\firstInfo;

class firstInfoController extends Controller
{
    public function index(){
        $firstPage = firstInfo::all();
        return view('index')->with('firstPage', $firstPage);
    }

    public function create(){
        return view('create');
    }

    public function edit($id){
        $info = firstInfo::find($id);
        return view('edit')->with('first_info', $info);
    }

    public function store(Request $request){
        $info = new firstInfo;
        $info->app_name = $request->app_name;
        $info->theme_color = $request->theme_color;
        // $info->bg_image = $request->bg_image->store('public/images');

        // {
        //     $this->validate($request, [
        //         'bg_image' => 'bg_image'
        //     ]);
        // }
        if($request->hasFile('bg_image')){
            $info->bg_image = $request->bg_image->store('public/images');
            // $info->bg_image = Storage::putFile('public/images', $request->bg_image);

        }else{
            return 'No file selected';
        }

        $info->btn_color = $request->btn_color;
        $info->save();

        return redirect()->route('index');
    }

    public function update(Request $request, $id){
        $info = firstInfo::find($id);
        $info->app_name = $request->app_name;
        $info->theme_color = $request->theme_color;
        // $info->bg_image = $request->file('bg_image')->store('public/images');

        if($request->hasFile('bg_image')){
            $info->bg_image = $request->bg_image->store('public/images'); //// Not working Properly....
            // $info->bg_image = Storage::putFile('public/images', $request->bg_image);
        }else{
            return 'No file selected';
        }


        $info->btn_color = $request->btn_color;
        $info->save();

        return redirect()->route('index');
    }

    public function delete($id){
        $info = firstInfo::find($id);
        $info->delete();
        
        return redirect()->route('index');
    }
}
