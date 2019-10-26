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
Route::post('/login','UserController@login');
Route::post('/employee','EmployeeController@store');
Route::patch('/updateSalary','EmployeeController@update');
Route::get('/update/{id}','ApiTokenController@update');
Route::middleware('auth:api')->get('/user', 'UserController@index');
// Route::get('/user', 'UserController@index');
