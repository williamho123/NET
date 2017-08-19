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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tournament', function () {
    return view('tournament');
});
Route::get('/rules', function () {
    return view('rules');
});

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/status', 'StatusController@index');

Route::get('/registration', 'RegistrationController@index');
Route::get('/registration/create', 'RegistrationController@create');
Route::post('/registration', 'RegistrationController@store');
