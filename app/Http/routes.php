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

Route::get('/', ['middleware'=>'guest', function () {
    return view('login');
}]);
Route::get('login',['middleware'=>'guest', function () {
    return view('login');
}]);
Route::get('home', ['middleware'=>'auth', function () {
    return view('welcome');
}]);
Route::post('login', 'Auth\AuthController@checkLogin');

//Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('logout', 'Auth\AuthController@getLogout');
