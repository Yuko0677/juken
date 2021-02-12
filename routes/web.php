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

//, 'middleware' => 'auth'
Route::group(['prefix' => 'admin'], function () {
  Route::get('homework/create', 'Admin\HomeworkController@add');
  Route::post('homework/create', 'Admin\HomeworkController@create');
  Route::get('homework/edit', 'Admin\HomeworkController@edit');
  Route::post('homework/edit', 'Admin\HomeworkController@update');
  Route::get('homework/', 'Admin\HomeworkController@index');
  Route::post('homework/delete', 'Admin\HomeworkController@delete');

  Route::get('targetschool/create', 'Admin\TargetSchoolController@add');
  Route::post('targetschool/create', 'Admin\TargetSchoolController@create');
  Route::get('targetschool/edit', 'Admin\TargetSchoolController@edit');
  Route::post('targetschool/edit', 'Admin\TargetSchoolController@update');
  Route::get('targetschool/', 'Admin\TargetSchoolController@index');
  Route::post('targetschool/delete', 'Admin\TargetSchoolController@delete');

  Route::get('standardscore/create', 'Admin\StandardscoreController@add');
  Route::post('standardscore/create', 'Admin\StandardscoreController@create');
  Route::get('standardscore/edit', 'Admin\StandardscoreController@edit');
  Route::post('standardscore/edit', 'Admin\StandardscoreController@update');
  Route::get('standardscore/', 'Admin\StandardscoreController@index');
  Route::post('standardscore/delete', 'Admin\StandardscoreController@delete');

  Route::get('memo/create', 'Admin\MemoController@add');
  Route::post('memo/create', 'Admin\MemoController@create');
  Route::get('memo/edit', 'Admin\MemoController@edit');
  Route::post('memo/edit', 'Admin\MemoController@update');
  Route::get('memo/', 'Admin\MemoController@index');
  Route::post('memo/delete', 'Admin\MemoController@delete');

  Route::get('subject/create', 'Admin\SubjectController@add');
  Route::post('subject/create', 'Admin\SubjectController@create');
  Route::get('subject/edit', 'Admin\SubjectController@edit');
  Route::post('subject/edit', 'Admin\SubjectController@update');
  Route::get('subject/', 'Admin\SubjectController@index');
  Route::post('subject/delete', 'Admin\SubjectController@delete');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
