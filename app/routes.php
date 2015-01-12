<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('/editor','HomeController@editor');

Route::get('/caption', 'HomeController@caption');

Route::get('/post/{id}','PostController@show');

Route::get('/{name}','UserController@showUser');

Route::get('/shop/{name}','ShopController@showShop');

Route::group(array('prefix' => 'connect'), function()
{
    Route::get('/facebook', 'UserController@loginWithFacebook');

    Route::get('/google', 'UserController@loginWithGoogle');

    Route::get('/twitter', 'UserController@loginWithTwitter');
});

Route::post('/uploadImage', 'HomeController@uploadImage');

App::missing(function($exception) {
    return Redirect::to('/');
});