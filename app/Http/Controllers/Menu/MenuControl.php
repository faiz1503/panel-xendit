<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuControl extends Controller
{
    /**
     * ! BEGIN GET VIEW FROM MENU CALLBACKS
     */

    /**
     * created by faiz on 2020-12-14 15:31:09
     *
     * *function get view callbacks on folder menu
     *
     * @return view('menu.view_callbacks')
     */
    public function get_view_callbacks()
    {
        //judul halaman
        $data['title'] = 'Callbacks';

        //mengembalikan ke halaman mitra/view_driver
        return view('menu.view_callbacks', $data);
    }
    /**
     * ! END OF GET VIEW FROM MENU CALLBACKS
     */



}
