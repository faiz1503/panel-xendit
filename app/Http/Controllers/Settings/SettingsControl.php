<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsControl extends Controller
{
    /**
     * ! BEGIN GET VIEW FROM SETTINGS
     */

    /**
     * created by faiz on 2020-12-17 09:18:15
     *
     * *function get view settings from
     *
     * @return view('settings.view_settings')
     */
    public function get_view_settings()
    {
        //judul halaman
        $data['title'] = 'Settings';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_settings', $data);
    }
    /**
     * ! END OF GET VIEW FROM MENU SETTINGS
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> PAYMENT METHODS
     */

    /**
     * created by faiz on 2020-12-17 09:30:30
     *
     * *function get view payment methods page from folder settings
     *
     * @return view('settings.payment_methods.view_payment_methods')
     */
    public function get_view_payment_methods()
    {
        //judul halaman
        $data['title'] = 'Payment Methods';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.payment_methods.view_payment_methods', $data);
    }

    /**
     * created by faiz on 2020-12-18 14:15:37
     *
     * *function get view payment methods card from folder settings->payment_methods
     */
    public function get_view_card_configuration()
    {
        //judul halaman
        $data['title'] = 'Card Configuration';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.payment_methods.view_card_configuration', $data);
    }

    /**
     * ! END OF GET VIEW FROM SETTINGS -> PAYMENT METHODS
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> SENDING MONEY
     */

    /**
     * created by faiz on 2020-12-17 14:44:43
     *
     * *fuction get view sending money page from folder settings
     *
     * @return view('settings.view_sending_money')
     */
    public function get_view_sending_money()
    {
        //judul halaman
        $data['title'] = 'Sending Money';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_sending_money', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> SENDING MONEY
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> BUSINESS PROFILE
     */

    /**
     * created by faiz on 2020-12-17 14:47:08
     *
     * *function get view business profile from folder settings
     *
     * @return view('settings.view_business_profile')
     */
    public function get_view_business_profile()
    {
        //judul halaman
        $data['title'] = 'Business Profile';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_business_profile', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> BUSINESS PROFILE
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> TEAM
     */

    /**
     * created by faiz on 2020-12-17 14:50:34
     *
     * *function get view team from folder settings
     *
     * @return view('settings.view_team')
     */
    public function get_view_team()
    {
        //judul halaman
        $data['title'] = 'Team';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_team', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> TEAM
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> BILLINGS
     */

    /**
     * created by faiz on 2020-12-17 15:12:40
     *
     * *function get view billings from folder settings
     *
     * @return view('settings.view_billings')
     */
    public function get_view_billings()
    {
        //judul halaman
        $data['title'] = 'Billings';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_billings', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> BILLINGS
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> DEVELOPERS
     */

    /**
     * created by faiz on 2020-12-17 15:12:53
     *
     * *function get view team from folder settings
     *
     * @return view('settings.view_developers')
     */
    public function get_view_developers()
    {
        //judul halaman
        $data['title'] = 'Developers';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_developers', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> DEVELOPERS
     */


    /**
     * ! BEGIN GET VIEW FROM SETTINGS -> WITHDRAWALS
     */

    /**
     * created by faiz on 2020-12-17 15:13:24
     *
     * *function get view team from folder settings
     *
     * @return view('settings.view_withdrawals')
     */
    public function get_view_withdrawals()
    {
        //judul halaman
        $data['title'] = 'Withdrawals';

        //mengembalikan ke halaman mitra/view_driver
        return view('settings.view_withdrawals', $data);
    }
    /**
     * ! END OF GET VIEW FROM SETTINGS -> WITHDRAWALS
     */
}
