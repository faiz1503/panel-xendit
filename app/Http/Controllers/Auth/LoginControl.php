<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginControl extends Controller
{
    public function get_login(){
        $data['title'] = 'Login Panel Xendit';
        return view('auth.login', $data);
    }

    public function post_login(Request $request){
        $params = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($params)) {
            return redirect('/');
        }
    }
}
