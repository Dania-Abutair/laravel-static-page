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

Route::get('/', 'TraineesController@trainees');
Route::get('/trainee/{id}', 'TraineesController@trainee');
Route::get('/summary', 'TraineesController@summary');
Route::get('/gallery', 'TraineesController@gallery');
Route::get('/dashboard', 'TraineesController@dashboard');


