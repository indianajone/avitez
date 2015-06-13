<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('our-bottles',[
    'as' => 'bottles_path',
    'uses' => 'PagesController@bottles'
]);

Route::get('our-water',[
    'as' => 'water_path',
    'uses' => 'PagesController@water'
]);

Route::get('our-environment',[
    'as' => 'env_path',
    'uses' => 'PagesController@environment'
]);

/**
 * Orders
 */
Route::get('orders',[
    'as' => 'order_path',
    'uses' => 'Order\OrdersController@index'
]);

Route::post('orders',[
    'as' => 'order_path',
    'uses' => 'Order\OrdersController@store'
]);

Route::get('confirmation', [
    'as' => 'order_confirm',
    'uses' => 'Order\ConfirmationController@index'
]);

Route::post('confirmation', [
    'as' => 'order_confirm',
    'uses' => 'Order\ConfirmationController@store'
]);

Route::delete('confirmation', [
    'as' => 'order_confirm',
    'uses' => 'Order\ConfirmationController@detroy'
]);

Route::get('shipping-details', [
    'as' => 'order_shipping',
    'uses' => 'Order\ShippingController@index'
]);

Route::post('shipping-details', [
    'as' => 'order_shipping',
    'uses' => 'Order\ShippingController@store'
]);

Route::get('payments', [
    'as' => 'order_payment',
    'uses' => 'Order\PaymentsController@index'
]);

Route::post('payments', [
    'as' => 'order_payment',
    'uses' => 'Order\PaymentsController@store'
]);

Route::delete('payments', [
    'as' => 'order_payment',
    'uses' => 'Order\PaymentsController@destroy'
]);

Route::get('thankyou', [
    'as' => 'order_thanks',
    'uses' => 'Order\PaymentsController@thanks'
]);

// ----

Route::get('story',[
    'as' => 'story_path',
    'uses' => 'PagesController@story'
]);

Route::get('faqs',[
    'as' => 'faq_path',
    'uses' => 'PagesController@faq'
]);

Route::get('contact',[
    'as' => 'contact_path',
    'uses' => 'PagesController@contact'
]);

Route::post('contact', function()
{
    $input = Input::only('name', 'email', 'body', 'company', 'phone');

    $validator = Validator::make($input, [
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required'
    ]);

    if ($validator->fails())
    {
        return back()->withErrors($validator)->withInput($input);
    }

    Mail::send('emails.contact', $input, function($message) use ($input)
    {
        $message->from($input['email'], $input['name']);

        $message->to('info@avitez.com')->subject('Enquiry from website');

    });

    return Redirect::route('contact_path')->withMessage('Thank you for your enquiry. We will respond within 24 hours.');
});