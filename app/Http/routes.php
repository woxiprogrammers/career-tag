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

Route::get('/', ['middleware'=>'guest','after'=>'no-cache', function () {
    return view('login');
}]);
Route::get('login',['middleware'=>'guest','after'=>'no-cache', function () {
    return view('login');
}]);
Route::filter('no-cache',function($route, $request, $response){
    $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
    $response->headers->set('Pragma','no-cache');
    $response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
});
Route::get('home', 'Auth\AuthController@home');
Route::post('login', 'Auth\AuthController@checkLogin');

//Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('logout', 'Auth\AuthController@getLogout');
