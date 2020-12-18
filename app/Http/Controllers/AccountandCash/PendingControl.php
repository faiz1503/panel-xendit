<?php

namespace App\Http\Controllers\AccountandCash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingControl extends Controller
{
    /**
     * created by faiz on 2020-12-14 10:38:14
     *
     * *function get view pending
     *
     * @return view('account_and_cash.view_pending')
     */

    public function get_view_pending()
    {
        //judul halaman
        $data['title'] = 'Pending';

        //mengembalikan ke halaman mitra/view_driver
        return view('account_and_cash.view_pending', $data);
    }
}
