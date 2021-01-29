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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/', 'FrontController@front');
Route::get('/homework', 'HomeworkController@index');
Route::get('/standardscore', 'StandardscoreController@index');
Route::get('/memo', 'MemoController@index');
Route::get('/targetschool', 'TargetschoolController@index');
Route::get('admin/', 'Admin\HomeController@home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('homework/create', 'Admin\HomeworkController@add')->middleware('auth');
  Route::post('homework/create', 'Admin\HomeworkController@create')->middleware('auth');
  Route::get('homework/edit', 'Admin\HomeworkController@edit')->middleware('auth');
  Route::post('homework/edit', 'Admin\HomeworkController@update')->middleware('auth');
  Route::get('homework/', 'Admin\HomeworkController@index')->middleware('auth');
  Route::post('homework/delete', 'Admin\HomeworkController@delete')->middleware('auth');

  Route::get('targetschool/create', 'Admin\TargetschoolController@add')->middleware('auth');
  Route::get('targetschool/create', 'Admin\TargetschoolController@create')->middleware('auth');
  Route::get('targetschool/edit', 'Admin\TargetschoolController@edit')->middleware('auth');
  Route::post('targetschool/edit', 'Admin\TargetschoolController@update')->middleware('auth');
  Route::get('targetschool/', 'Admin\TargetschoolController@index')->middleware('auth');
  Route::post('targetschool/delete', 'Admin\TargetschoolController@delete')->middleware('auth');

  Route::get('standardscore/create', 'Admin\StandardscoreController@add')->middleware('auth');
  Route::post('standardscore/create', 'Admin\StandardscoreController@create')->middleware('auth');
  Route::get('standardscore/edit', 'Admin\StandardscoreController@edit')->middleware('auth');
  Route::post('standardscore/edit', 'Admin\StandardscoreController@update')->middleware('auth');
  Route::get('standardscore/', 'Admin\StandardscoreController@index')->middleware('auth');
  Route::post('standardscore/delete', 'Admin\StandardscoreController@delete')->middleware('auth');

  Route::get('memo/create', 'Admin\MemoController@add')->middleware('auth');
  Route::post('memo/create', 'Admin\MemoController@create')->middleware('auth');
  Route::get('memo/edit', 'Admin\MemoController@edit')->middleware('auth');
  Route::post('memo/edit', 'Admin\MemoController@update')->middleware('auth');
  Route::get('memo/', 'Admin\MemoController@index')->middleware('auth');
  Route::post('memo/delete', 'Admin\MemoController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/front', 'FrontController@front')->name('front');
