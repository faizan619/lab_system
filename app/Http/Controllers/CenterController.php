<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function showcenterform(){
        return view("reference.center_ref_form");
    }
    public function centerformdata(Request $request){
        $request->validate([
            'center_name'=>'required',
            'center_short_name'=> 'required',
            'center_mobile1'=> 'required',
            'center_mobile2'=> 'nullable',
            'center_address'=> 'required',
        ]);

        $center = new Center();
        $center->center_name = $request->center_name;
        $center->center_short_name = $request->center_short_name;
        $center->center_mobile1 = $request->center_mobile1;
        $center->center_mobile2 = $request->center_mobile2;
        $center->center_address = $request->center_address;
        $center->save();

        return redirect()->route('center_ref_form')->with('status','Center Data Succesfully Added');

    }
}
