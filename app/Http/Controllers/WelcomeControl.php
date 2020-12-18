<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WelcomeControl extends Controller
{
    /**
     * created by faiz time: 2020-12-14 09:52:43
     *
     * todo: fungsi pengecekan login. jika user ditemukan dalam db, akan diarahkan ke halaman welcome.
     * todo: jika login gagal, user akan berada di halaman login
     *
     *
     * @return view('welcome')
     */

    public function get()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            $data['title'] = 'Dashboard';
            return view('welcome', $data);
        }
    }
    
}
