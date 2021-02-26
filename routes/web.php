<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu');
});

/*---------- user profile ----------*/
Route::resource('Profile','Profile_manage_controller');
Route::post('Profile','Profile_manage_controller@update')->name('UpdateUserProfile');
/*----------------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('v_dashboard','Dashboard_controller@show_dashboard');

Route::resource('report','Report_controller');