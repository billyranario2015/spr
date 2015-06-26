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

Route::get( '/', 'HomeController@index' );
Route::get( 'auth/login', 'BaseController@login' );
Route::get( 'auth/register', 'BaseController@registration' );
Route::get( 'user/exams', 'ExamController@examLists');
Route::get( 'user/begin-test', 'ExamController@confirmExam');
Route::get( 'user/questions', 'ExamController@questions');
Route::get( 'user/confirm-submit', 'ExamController@confirmSubmit');
Route::get( 'user/result', 'ExamController@result');
Route::get( 'user/preview', 'ExamController@showTakenExam');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
