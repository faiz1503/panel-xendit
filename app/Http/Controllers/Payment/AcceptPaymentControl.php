<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcceptPaymentControl extends Controller
{
    /**
     * ! BEGIN GET VIEW FROM ACCEPT_PAYMENT/CREDIT_CARDS
     */

    /**
     * created by faiz on 2020-12-14 13:17:29
     *
     * *function get view transactions on folder accept_payment/credit_cards
     *
     * @return view('accept_payment.credit_cards.view_transactions')
     */
    public function get_view_transactions()
    {
        //judul halaman
        $data['title'] = 'Transactions';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.credit_cards.view_transactions', $data);
    }

    /**
     * created by faiz on 2020-12-14 13:20:14
     *
     * *fucntion get view fraud prevention on folder accept_payment/credit_cards
     *
     * @return view('accept_payment.credit_cards.view_fraud_prevention')
     */

    public function get_view_fraud_prevention()
    {
        //judul halaman
        $data['title'] = 'Fraud Prevention';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.credit_cards.view_fraud_prevention', $data);
    }

    /**
     * created by faiz on 2020-12-14 13:22:33
     *
     * *function get view promotions on folder accept_payment/credit_cards
     *
     * @return view('accept_payment.credit_cards.view_promotions')
     */
    public function get_view_promotions()
    {
        //judul halaman
        $data['title'] = 'Promotions';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.credit_cards.view_promotions', $data);
    }

    /**
     * ! END OF GET VIEW FROM ACCEPT_PAYMENT/CREDIT_CARDS
     **/


    /**
     * ! BEGIN GET VIEW FROM ACCEPT_PAYMENT
     */

    /**
     * created by faiz on 2020-12-14 13:30:35
     *
     * *function get view fixed virtual account on folder accept_payment
     *
     * @return view('accept_payment.view_fixed_virtual_accounts')
     */
    public function get_view_fixed_virtual_accounts()
    {
        //judul halaman
        $data['title'] = 'Fixed Virtual Accounts';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_fixed_virtual_accounts', $data);
    }

    /**
     * created by faiz on 2020-12-14 13:41:50
     *
     * *function get view ewallets on folder accept_payment
     *
     * @return view('accept_payment.view_ewallets')
     */
    public function get_view_ewallets()
    {
        //judul halaman
        $data['title'] = 'eWallets';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_ewallets', $data);
    }

    /**
     * created by faiz on 2020-12-14 13:49:17
     *
     * *function get view retail outlets on folder accept_payment
     *
     * @return view('accept_payment.view_retail_outlets')
     */
    public function get_view_retail_outlets()
    {
        //judul halaman
        $data['title'] = 'Retail Outlets';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_retail_outlets', $data);
    }

    /**
     * created by faiz on 2020-12-14 13:50:48
     *
     * *function get view invoices
     *
     * @return view('accept_payment.view_invoices')
     */
    public function get_view_invoices()
    {
        //judul halaman
        $data['title'] = 'Invoices';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_invoices', $data);
    }

    /**
     * created by faiz on 2020-12-14 14:05:32
     *
     * *function get view on demand
     *
     * @return view('accept_payment.view_on_demand')
     */
    public function get_view_on_demand()
    {
        //judul halaman
        $data['title'] = 'On Demand';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_on_demand', $data);
    }

    /**
     * created by faiz on 2020-12-14 14:06:48
     *
     * *function get view reccuring
     *
     * @return view('accept_payment.view_reccuring')
     */
    public function get_view_reccuring()
    {
        //judul halaman
        $data['title'] = 'Reccuring';

        //mengembalikan ke halaman mitra/view_driver
        return view('accept_payment.view_reccuring', $data);
    }

    /**
     * ! END OF GET VIEW FROM ACCEPT_PAYMENT
     */

}
