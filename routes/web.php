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

Route::get('/idee', function () {
    return view('idee');
});

Route::get('top10', function () {
    return view('top10');
});

Route::get('scholen', function () {
    return view('scholen');
});

Route::get('bestellen', function () {
    return view('bestellen');
});

Route::get('contact', function () {
    return view('contact');
});