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



Route::post('reservation','hotelcontroller@store');

Route::post('admin','hotelcontroller@login');

Route::get('/admin', function () {
    return view('login');
});


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/hakkımızda', function () {
    return view('hakkımızda');
});
Route::get('/odalar', function () {
    return view('odalar');
});
Route::get('/kral', function () {
    return view('kral');
});
Route::get('/oneclass', function () {
    return view('oneclass');
});
Route::get('/family', function () {
    return view('family');
});
Route::get('/dining', function () {
    return view('dining');
});
Route::get('/amenities', function () {
    return view('amenities');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});