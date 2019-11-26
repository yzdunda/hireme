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

// Login
Route::post('company-login', 'CompanyController@login');

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

// Show a single vacancy
Route::get('vacancy/{id}', 'VacancyController@show');

// Create a new vacancy
Route::post('vacancy', 'VacancyController@store');

// Delete a vacancy
Route::delete('vacancy/{id}', 'VacancyController@destroy');

// ------ Applicants ------

// List all Applicants
Route::get('applicants', 'ApplicantController@index');

// Show a single Applicants
Route::get('applicant/{id}', 'ApplicantController@show');

// Show a single Applicants for user
Route::get('applicant/user/{user_id}', 'ApplicantController@show_for_user');

// Show a single Applicants for company
Route::get('applicant/company/{company_id}', 'ApplicantController@show_for_company');

// Create a new Applicants
Route::post('applicant', 'ApplicantController@store');

// Delete a Applicants
Route::delete('applicant/{id}', 'ApplicantController@destroy');
