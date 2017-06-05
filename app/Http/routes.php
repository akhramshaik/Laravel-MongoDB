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



Route::get('/', 'DarwinController@index');
Route::get('home', 'DarwinController@index');

Route::get('job_apply', 'DarwinController@jobapply');
Route::get('admin_list', 'DarwinController@admin_list');




Route::get('job_data', 'DarwinController@jobdata');

Route::get('get_all_jobs', 'DarwinController@get_all_jobs');


Route::get('job_apply_form/{id}', 'DarwinController@job_apply_form');
Route::get('view_applied/{id}', 'DarwinController@view_applied');



Route::get('job_form/{id}', 'DarwinController@jobformsub');

Route::post('process_form_data','DarwinController@process_form_data');
Route::post('process_short','DarwinController@process_short');
Route::post('process_rejec','DarwinController@process_rejec');

Route::post('filter_company_applicat','DarwinController@filter_company_applicat');



Route::post('get_individual','DarwinController@get_individual');



