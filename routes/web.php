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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestPage@index')->name('testpage');

Route::get('/reservation', 'ReservationController@index')->name('reservationpage');

Route::get('/template', 'TemplateController@index')->name('template');
Route::get('/template/bullshit', 'TemplateController@bullshit')->name('template');
