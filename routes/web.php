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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/bios', 'PagesController@bios');
Route::get('/logistics', 'PagesController@logistics');
Route::get('/questions', 'PagesController@questions');
Route::get('/rules', 'PagesController@rules');
Route::get('/speakers', 'PagesController@speakers');

Route::get('/contact', 'ContactController@index');

Route::get('/registration', 'RegistrationController@index');
