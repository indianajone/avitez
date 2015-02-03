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

Route::get('order',[
    'as' => 'order_path',
    'uses' => 'PagesController@order'
]);

Route::get('story',[
    'as' => 'story_path',
    'uses' => 'PagesController@story'
]);

Route::get('faq',[
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

    Mail::send('emails.contact', $input, function($message) use ($input)
    {
        $message->from($input['email'], $input['name']);

        $message->to('info@avitez.com')->subject('Enquiry from website');

    });

    return Redirect::route('contact_path')->withMessage('Thank you.');
});