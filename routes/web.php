<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home');
Route::get('/homework', 'HomeworkController@index');
Route::get('/standardscore', 'StandardscoreController@index');
Route::get('/memo', 'MemoController@index');
Route::get('/targetschool', 'TargetschoolController@index');
Route::get('/admin/targetschool/create', 'TargetschoolController@index');
Route::get('/admin/homework/create', 'HomeworkController@add');
Route::post('/admin/homework/create', 'HomeworkController@create');
Route::get('/admin/homework/edit', 'HomeworkController@edit');
Route::post('/admin/homework/edit', 'HomeworkController@update');
Route::get('/admin/homework', 'HomeworkController@index');
Route::post('/admin/homework/delete', 'HomeworkController@delete');
