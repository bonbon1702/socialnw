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

Route::group(['prefix' => 'facebook'], function ()
{
    Route::get('connect', function ()
    {
        return Fb::authenticate();
    });

    Route::get('callback','UserController@callBack');
});