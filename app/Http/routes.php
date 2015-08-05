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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('auth/github','Auth\AuthController@index');
//Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('auth/linkedin', 'Auth\AuthController@redirectToLinkedIn');
Route::get('auth/linkedin/callback', 'Auth\AuthController@handleProviderCallbackLinkedIn');

Route::get('auth/xing', 'Auth\AuthController@redirectToXing');
Route::get('auth/xing/callback', 'Auth\AuthController@handleProviderCallbackXing');
