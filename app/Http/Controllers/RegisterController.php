<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'registration',
            'active' => 'registration'
        ]);
    }
    public function store(Request $request){
        $validatedData = $validate = $request->validate([
            'name'=> ['required','max:255'],
            'username'=> ['required','unique:users'],
            'email'=> ['required','email:rfc,dns','unique:users'],
            'password'=> ['required','min:8','max:255']
        ]);
        User::create($validatedData);
        // $request->session()->flash('success', 'Succsesfully Registered , Please login');
        return redirect('/login')->with('success','Succsesfully Registered , Please login');
    }
}