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

Route::get('/', 'DonationController@index');

Route::get('donasi', function () {
    return view ('donasi');
});

Route::get('donation', function () {
    return view('donation');
})->name('donation');

Route::get('/donation', 'DonationController@donate')->name('donation');

Route::get('landing', function () {
    return view ('landing');
});

Route::get('/donation', 'DonationController@create');
Route::get('/landing', 'DonationController@land');
Route::post('/donation', 'DonationController@store');