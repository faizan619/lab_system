<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginAdmin(Request $request){
        $data = $request->validate([
            'username'=>'required',
            'password'=> 'required',
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('create');
        }
        else{
            return redirect()->route('login')->with('status','Please Enter Correct Credentails!');
        }
    }   
}
