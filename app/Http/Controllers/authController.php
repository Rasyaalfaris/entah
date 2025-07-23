<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function viewreg(){
        return view('auth.register',[
            'judul' => 'register'
        ]);
    }
    public function store(request $request){
        $valid = $request->validate([
            'name' => ['required'],
            'email' => ['email:dns','unique:users,email'],
            'password' => ['min:4']
        ],[
            'password.min' => 'rasya kntl'
        ]);
        User::create($valid);
        return
         redirect('/login')->with('succes','berhasil');
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect('/login');
}
}
