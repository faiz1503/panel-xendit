<?php

namespace App\Http\Controllers\AccountandCash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashControl extends Controller
{
     /**
     * created by faiz on 2020-12-14 10:37:14
     *
     * *function get view cash
     *
     * @return view('account_and_cash.view_cash')
     */

    public function get_view_cash()
    {
        //judul halaman
        $data['title'] = 'Cash';

        //mengembalikan ke halaman mitra/view_driver
        return view('account_and_cash.view_cash', $data);
    }
}
