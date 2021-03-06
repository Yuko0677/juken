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
Route::get('/homework', 'HomeworkController@index')->name('homework');
Route::get('/exam', 'ExamController@index')->name('exam');
Route::get('/standardscore', 'StandardscoreController@index')->name('standardscore');
Route::get('/memo', 'MemoController@index')->name('memo');
Route::get('/targetschool', 'TargetschoolController@index')->name('targetschool');
Route::get('admin/', 'Admin\HomeController@home');

Route::group([
  'prefix' => 'admin/homework',
  'namespace' => 'Admin',
  'as' => 'admin.homework.',
  'middleware' => 'auth',
], function () {
  Route::get('/', 'HomeworkController@index')->name('index');
  Route::get('/create', 'HomeworkController@add')->name('create');
  Route::post('/create', 'HomeworkController@create')->name('create');
  Route::get('/edit', 'HomeworkController@edit');
  Route::post('/edit', 'HomeworkController@update');
  Route::get('/delete', 'HomeworkController@delete');
});

Route::group([
  'prefix' => 'admin/memo',
  'namespace' => 'Admin',
  'as' => 'admin.memo.',
], function () {
  Route::get('', 'MemoController@index')->name('index');
  Route::get('create', 'MemoController@add')->name('create');
  Route::post('create', 'MemoController@create')->name('create');
  Route::get('edit', 'MemoController@edit');
  Route::post('edit', 'MemoController@update');
  Route::get('delete', 'MemoController@delete');
});

Route::group([
  'prefix' => 'admin/targetschool',
  'namespace' => 'Admin',
  'as' => 'admin.targetschool.',
], function () {
  Route::get('', 'TargetSchoolController@index')->name('index');
  Route::get('create', 'TargetSchoolController@add')->name('create');
  Route::post('create', 'TargetSchoolController@create')->name('create');
  Route::get('edit', 'TargetSchoolController@edit');
  Route::post('edit', 'TargetSchoolController@update');
  Route::get('delete', 'TargetSchoolController@delete');
});

Route::group([
  'prefix' => 'admin/standardscore',
  'namespace' => 'Admin',
  'as' => 'admin.standardscore.',
], function () {
  Route::get('/{exam_id}', 'StandardscoreController@index')->name('index');
  Route::get('/{exam_id}/create', 'StandardscoreController@add')->name('create');
  Route::post('/{exam_id}/create', 'StandardscoreController@create')->name('create');
  Route::get('/{exam_id}/edit', 'StandardscoreController@edit');
  Route::post('/{exam_id}/edit', 'StandardscoreController@update');
  //Route::post('/{exam_id}/delete', 'StandardscoreController@delete');
  Route::get('/{exam_id}/delete', 'StandardscoreController@delete');
});

Route::group([
  'prefix' => 'admin/exam',
  'namespace' => 'Admin',
  'as' => 'admin.exam.',
], function () {
  Route::get('', 'ExamController@index')->name('index');
  Route::get('create', 'ExamController@add')->name('create');
  Route::post('create', 'ExamController@create')->name('create');
  Route::get('edit', 'ExamController@edit');
  Route::post('edit', 'ExamController@update');
  Route::get('delete', 'ExamController@delete');
});

Route::group([
  'prefix' => 'admin/subject',
  'namespace' => 'Admin',
  'as' => 'admin.subject.',
], function () {
  Route::get('', 'SubjectController@index')->name('index');
  Route::get('create', 'SubjectController@add')->name('create');
  Route::post('create', 'SubjectController@create')->name('create');
  Route::get('edit', 'SubjectController@edit');
  Route::post('edit', 'SubjectController@update');
  Route::get('delete', 'SubjectController@delete');
});

//, 'middleware' => 'auth'
// Route::group(['prefix' => 'admin'], function () {
//   Route::get('homework/', 'Admin\HomeworkController@index')->name('admin.homework.index');
//   Route::get('homework/create', 'Admin\HomeworkController@add')->name('admin.homework.create');
//   Route::post('homework/create', 'Admin\HomeworkController@create')->name('admin.homework.create');
//   Route::get('homework/edit', 'Admin\HomeworkController@edit');
//   Route::post('homework/edit', 'Admin\HomeworkController@update');
//   Route::post('homework/delete', 'Admin\HomeworkController@delete');

//   Route::get('targetschool/create', 'Admin\TargetSchoolController@add');
//   Route::post('targetschool/create', 'Admin\TargetSchoolController@create');
//   Route::get('targetschool/edit', 'Admin\TargetSchoolController@edit');
//   Route::post('targetschool/edit', 'Admin\TargetSchoolController@update');
//   Route::get('targetschool/', 'Admin\TargetSchoolController@index');
//   Route::post('targetschool/delete', 'Admin\TargetSchoolController@delete');

//   Route::get('standardscore/create', 'Admin\StandardscoreController@add');
//   Route::post('standardscore/create', 'Admin\StandardscoreController@create');
//   Route::get('standardscore/edit', 'Admin\StandardscoreController@edit');
//   Route::post('standardscore/edit', 'Admin\StandardscoreController@update');
//   Route::get('standardscore/', 'Admin\StandardscoreController@index');
//   Route::post('standardscore/delete', 'Admin\StandardscoreController@delete');

//   Route::get('subject/create', 'Admin\SubjectController@add');
//   Route::post('subject/create', 'Admin\SubjectController@create');
//   Route::get('subject/edit', 'Admin\SubjectController@edit');
//   Route::post('subject/edit', 'Admin\SubjectController@update');
//   Route::get('subject/', 'Admin\SubjectController@index');
//   Route::post('subject/delete', 'Admin\SubjectController@delete');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
