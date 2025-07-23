<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login() {
        return view('auth.login', [
            'judul' => 'login'
        ]); 
    }
    public function store(Request $request) {
    $creden = $request->validate([
        'email' => ['email:dns','required'],
        'password' => ['min:5','required']
    ]);
        if(Auth::attempt($creden)){
            $request->session()->regenerate();
            return redirect('/');
    }
    return back()->with('gagal','hakan knjt');
}
    //
}
