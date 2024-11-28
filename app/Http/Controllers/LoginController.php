<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'login',
            'active' => 'login'
        ]);
    }
    public function authenticated(Request $request){
        $this->validate($request,[]);
    }
}
