<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendPaymentControl extends Controller
{
    /**
     * ! BEGIN GET VIEW FROM SEND_PAYMENT
     */

    /**
     * created by faiz on 2020-12-14 14:57:25
     *
     * *function get view disbursements on folder send_payments
     *
     * @return view('send_payments.view_disbursements')
     */
    public function get_view_disbursements()
    {
        //judul halaman
        $data['title'] = 'Disbursements';

        //mengembalikan ke halaman mitra/view_driver
        return view('send_payments.view_disbursements', $data);
    }

    /**
     * created by faiz on 2020-12-14 15:01:20
     *
     * *function get view batch_disbursements on folder send_payments
     *
     * @return view('send_payments.view_batch_disbursements')
     */
    public function get_view_batch_disbursements()
    {
        //judul halaman
        $data['title'] = 'Batch Disbursements';

        //mengembalikan ke halaman mitra/view_driver
        return view('send_payments.view_batch_disbursements', $data);
    }

    /**
     * created by faiz on 2020-12-14 15:03:57
     *
     * *function get view payouts on folder send_payments
     *
     * @return view('send_payments.view_payouts')
     */
    public function get_view_payouts()
    {
        //judul halaman
        $data['title'] = 'Payouts';

        //mengembalikan ke halaman mitra/view_driver
        return view('send_payments.view_payouts', $data);
    }

    /**
     * ! END OF GET VIEW FROM SEND_PAYMENT
     */
}
