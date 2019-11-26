<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// ------ COMPANIES ------

// List all companies
Route::get('companies', 'CompanyController@index');

// Show a single company
Route::get('company/{id}', 'CompanyController@show');

// Create a new company
Route::post('company', 'CompanyController@store');

// Delete a company
Route::delete('company/{id}', 'CompanyController@destroy');

// ------ VACANCIES ------

// List all Vacancy
Route::get('vacancies', 'VacancyController@index');

// Show a single company
Route::get('vacancy/{id}', 'VacancyController@show');

// Create a new company
Route::post('vacancy', 'VacancyController@store');

// Delete a company
Route::delete('vacancy/{id}', 'VacancyController@destroy');

// ------ Applicants ------

// List all Vacancy
Route::get('applicants', 'ApplicantController@index');

// Show a single company
Route::get('applicant/{id}', 'ApplicantController@show');

// Create a new company
Route::post('applicant', 'ApplicantController@store');

// Delete a company
Route::delete('applicant/{id}', 'ApplicantController@destroy');
