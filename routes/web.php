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

Route::get('/vacancy', function () {
    return view('/vacancy/vacancy');
});

Route::get('/vacancy-detail', function () {
    return view('/vacancy/vacancy-item-detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/company-login', function () {
    return view('/company/company-login');
});

Route::get('/company-profile', function () {
    return view('/company/company-dash-profile');
});

Route::get('/company-vacancies', function () {
    return view('/company/company-dash-my-vacancy');
});

Route::get('/company-create', function () {
    return view('/company/company-dash-create-new');
});

Route::get('/company-applicants', function () {
    return view('/company/company-dash-applicants');
});
