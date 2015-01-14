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

Route::get('/editor','PostController@editor');

Route::post('/editor','PostController@editor');

Route::get('/caption/{name}', 'PostController@caption');

Route::get('/post/{id}','PostController@show');

Route::get('/{name}','UserController@showUser');

Route::get('/shop/{name}','ShopController@showShop');

Route::group(array('prefix' => 'connect'), function()
{
    Route::get('/facebook', 'UserController@loginWithFacebook');

    Route::get('/google', 'UserController@loginWithGoogle');

    Route::get('/twitter', 'UserController@loginWithTwitter');
});

Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('post', 'PostController',
        array('only' => array('index', 'store', 'destroy')));
    Route::resource('upload', 'UploadController',
        array('only' => array('store')));

});

App::missing(function($exception) {
    return Redirect::to('/');
});