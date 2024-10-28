<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function loginAction(Request $post){
        $credensials= $post->only('email','password');
        if (Auth::attempt($credensials)) {
            return redirect('/landing');
        }
    }
}
