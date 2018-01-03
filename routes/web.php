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

Route::get('/registration', 'RegistrationController@index');
Route::post('/registration/update', 'RegistrationController@keepUpdated');
Route::get('/registration/create', 'RegistrationController@create');
Route::post('/registration/step1', 'RegistrationController@checkStep1');
Route::post('/registration/step2', 'RegistrationController@checkStep2');
Route::post('/registration/step3', 'RegistrationController@checkStep3');
Route::post('/registration/step4', 'RegistrationController@checkStep4');
Route::post('/registration', 'RegistrationController@store');

Route::get('/team', 'TeamController@dashboard');
Route::get('/team/login', 'AuthController@showTeamLogin');
Route::post('/team/login', 'AuthController@teamLogin');
Route::get('/team/logout', 'AuthController@teamLogout');
Route::get('/team/registration', 'TeamController@viewRegistration');
Route::get('/team/faq', 'TeamController@faq');
Route::post('/team/waivers', 'TeamController@waivers');

Route::get('/admin', 'AdminController@dashboard');
Route::get('/admin/login', 'AuthController@showAdminLogin');
Route::post('/admin/login', 'AuthController@adminLogin');
Route::get('/admin/logout', 'AuthController@adminLogout');
Route::get('/admin/registrations', 'AdminController@registrations');
Route::get('/admin/registrations/{team}/view', 'AdminController@viewRegistration');
Route::get('/admin/registrations/{team}/edit', 'AdminController@editRegistration');
Route::put('/admin/registrations/{team}/update', 'AdminController@updateRegistration');
Route::get('/admin/registrations/{team}/waivers', 'AdminController@viewWaivers');
Route::get('/admin/registrations/{team}/waivers/{id}/view', 'AdminController@viewSpecificWaiver');
Route::put('/admin/registrations/{team}/waivers/approve', 'AdminController@approveWaivers');
Route::post('/admin/registrations/{team}/waivers/replace', 'AdminController@replaceWaiver');
Route::put('/admin/registrations/{team}/accept', 'AdminController@acceptRegistration');
Route::put('/admin/registrations/{team}/waitlist', 'AdminController@waitlistRegistration');
Route::put('/admin/registrations/{team}/reject', 'AdminController@rejectRegistration');
Route::delete('/admin/registrations/{team}', 'AdminController@deleteRegistration');
Route::get('/admin/settings', 'AdminController@settings');
Route::post('/admin/settings/closedRegistration', 'AdminController@updateClosedRegistrationSettings');
Route::post('/admin/maintenance', 'AdminController@toggleAppMaintenance');
Route::post('/admin/registration', 'AdminController@toggleRegistration');