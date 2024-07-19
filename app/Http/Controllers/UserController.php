<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('register')->with('status','User Successfully Created!');
    }
}
