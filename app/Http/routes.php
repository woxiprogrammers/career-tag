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
Route::get('job-seeker/registration',array('uses' => 'JobSeekerController@registration'));
Route::get('php-excel',array('uses' => 'JobSeekerController@phpExcel'));
Route::get('spout',array('uses' => 'JobSeekerController@spout'));
