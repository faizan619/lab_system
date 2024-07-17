<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function showdocform(){
        return view("reference.doctor_ref_form");
    }
    public function docformdata(Request $request){
        $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "specialist"=> "required",
            "mobile"=> "required|numeric",
            "address"=> "nullable",
        ]);

        $data = new Doctor();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->specialist = $request->specialist;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();

        return redirect()->route('doc_ref_form')->with('status','Doctor Data Succesfully Added');
    }
}
