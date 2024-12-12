<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('backend.login');
    }
    public function Dologin(Request $request){
// dd($request->all());
$credential = $request->except('_token');
$check= Auth::attempt($credential);
//dd($crediential);
if($check){
    return redirect()->route('dashboard');
}
else{
     
    return redirect()->back();
}
    }
    public function sign_out(){
        Auth::logout();
        return redirect()->route('login');
    }
}
