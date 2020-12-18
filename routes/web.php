<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// empty session
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', 'auth\LoginControl@get_login');
    Route::post('/login', 'auth\LoginControl@post_login');
});

/**
 * created by faiz on 2020-12-14 11:01:54
 *
 * *route for account and cash:
 *  -all account
 *  -cash
 *  -pending
 *
 * *route for payment:
 * -accept payment
 * -send payment
 *
 * *route for menu:
 * -callbacks
 * -settings
 */
Route::group(['middleware' => ['ceklogin']], function () {
    // home
    Route::get('/', 'WelcomeControl@get');
    Route::get('/home', 'WelcomeControl@get');

    // get account-and-cash with folder controller AccountandCash
    Route::get('/all_account', 'AccountandCash\AllAccountControl@get_view_all_account');
    Route::get('/cash', 'AccountandCash\CashControl@get_view_cash');
    Route::get('/pending', 'AccountandCash\PendingControl@get_view_pending');
    // Route::get('/account-and-cash/pending/{id}', 'Mitra\DriverControl@edit_driver');
    // Route::get('/account-and-cash/driver_ajax', Mitra\DriverControl@ajax_driver');

    // get accept payment with folder controller payment with view on folder accept_payment/credit_cards
    Route::get('/credit_cards/transactions', 'Payment\AcceptPaymentControl@get_view_transactions');
    Route::get('/credit_cards/fraud_prevention', 'Payment\AcceptPaymentControl@get_view_fraud_prevention');
    Route::get('/credit_cards/promotions', 'Payment\AcceptPaymentControl@get_view_promotions');
    // Route::get('/account-and-cash/pending/{id}', 'Mitra\DriverControl@edit_driver');
    // Route::get('/account-and-cash/driver_ajax', Mitra\DriverControl@ajax_driver');

    // get accept payment with folder controller payment with view on folder accept_payment
    Route::get('/fixed_virtual_accounts', 'Payment\AcceptPaymentControl@get_view_fixed_virtual_accounts');
    Route::get('/ewallets', 'Payment\AcceptPaymentControl@get_view_ewallets');
    Route::get('/retail_outlets', 'Payment\AcceptPaymentControl@get_view_retail_outlets');
    Route::get('/invoices', 'Payment\AcceptPaymentControl@get_view_invoices');
    Route::get('/on_demand', 'Payment\AcceptPaymentControl@get_view_on_demand');
    Route::get('/reccuring', 'Payment\AcceptPaymentControl@get_view_reccuring');
    // Route::get('/account-and-cash/pending/{id}', 'Mitra\DriverControl@edit_driver');
    // Route::get('/account-and-cash/driver_ajax', Mitra\DriverControl@ajax_driver');

    // get send payment with folder controller payment with view on folder send_payment
    Route::get('/disbursements', 'Payment\SendPaymentControl@get_view_disbursements');
    Route::get('/batch_disbursements', 'Payment\SendPaymentControl@get_view_batch_disbursements');
    Route::get('/payouts', 'Payment\SendPaymentControl@get_view_payouts');
    // Route::get('/account-and-cash/pending/{id}', 'Mitra\DriverControl@edit_driver');
    // Route::get('/account-and-cash/driver_ajax', Mitra\DriverControl@ajax_driver');

    // get calbacks with folder controller menu with view on folder menu
    Route::get('/callbacks', 'Menu\MenuControl@get_view_callbacks');
    // Route::get('/account-and-cash/pending/{id}', 'Mitra\DriverControl@edit_driver');
    // Route::get('/account-and-cash/driver_ajax',
    // Mitra\DriverControl@ajax_driver');

    //get settings with folder controller settings with view on folder settings
    Route::get('/settings', 'Settings\SettingsControl@get_view_settings');

    //get menu from folder setting
    Route::get('/settings/payment_methods', 'Settings\SettingsControl@get_view_payment_methods');
    Route::get('/settings/payment_methods/card_configuration', 'Settings\SettingsControl@get_view_card_configuration');
    Route::get('/settings/sending_money', 'Settings\SettingsControl@get_view_sending_money');
    Route::get('/settings/business_profile', 'Settings\SettingsControl@get_view_business_profile');
    Route::get('/settings/team', 'Settings\SettingsControl@get_view_team');
    Route::get('/settings/billings', 'Settings\SettingsControl@get_view_billings');
    Route::get('/settings/developers', 'Settings\SettingsControl@get_view_developers');
    Route::get('/settings/withdrawals', 'Settings\SettingsControl@get_view_withdrawals');

});
