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

Route::get('/depot', function () {
    return view('depot');
});

Route::get('/stertselaar', function () {
    return view('stertselaar');
});

Route::get('/activiteiten', function () {
    return view('activiteiten');
});

Route::get('/cursussen', function () {
    return view('cursussen');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
