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

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

Route::get('/{category}', [
    'as' => 'category', 
    'uses' => 'PageController@category'
])->where('category', implode(array_keys(Config::get('constants.CATEGORIES')), '|'));