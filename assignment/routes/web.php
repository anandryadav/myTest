<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});
Route::get('/location', 'AssignmentController@getAll');
Route::get('/assignmentA', 'AssignmentController@assign_1');
Route::get('/assignmentB', 'AssignmentController@assign_2');
Route::get('/assignmentC', 'AssignmentController@assign_3');

Auth::routes();
