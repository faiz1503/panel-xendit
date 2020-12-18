<?php

namespace App\Http\Controllers\AccountandCash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllAccountControl extends Controller
{
    /**
     * created by faiz on 2020-12-14 10:35:11
     *
     * *function get view all account
     *
     * @return view('account_and_cash.view_all-account')
     */

    public function get_view_all_account()
    {
        //judul halaman
        $data['title'] = 'All Accounts';

        //mengembalikan ke halaman mitra/view_driver
        return view('account_and_cash.view_all_account', $data);
    }

}
