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
    return view('frontend.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' =>false,
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('logout1');

Route::get('/home', 'HomeController@index')->name('home');