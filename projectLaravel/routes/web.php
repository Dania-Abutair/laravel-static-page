<?php

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

Route::get('/','pageController@home')->name('home');
Route::get('/contactus','pageController@contactus')->name('contactus');
Route::get('/aboutus','StdController@aboutus')->name('aboutus');
Route::get('/services','StdController@services')->name('services');

