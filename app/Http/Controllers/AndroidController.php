<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;

class AndroidController extends Controller
{
    public function index(Request $request){

        // $ShowData = Device::all();
        $ShowData = Device::where('location', $request->android)->get();   
        $data = [
            'dataAndroid' => $ShowData
        ];
        return view('pages.showdevice.android',$data);
    }
}
