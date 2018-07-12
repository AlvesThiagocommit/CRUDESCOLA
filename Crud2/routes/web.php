<?php

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


Route::get('/','main@index')->name('home');

//Student
Route::get('student/create','StudentController@create')->name('create');
Route::post('student/create','StudentController@store')->name('store');
Route::get('student/edit/{id}','StudentController@edit')->name('edit');
Route::post('student/update/{id}','StudentController@update')->name('update');
Route::delete('student/delete/{id}','StudentController@delete')->name('delete');

//Professor
Route::get('professor/create','ProfessorController@create')->name('create');
Route::post('professor/create','ProfessorController@store')->name('store');
Route::get('professor/edit/{id}','ProfessorController@edit')->name('edit');
Route::post('professor/update/{id}','ProfessorController@update')->name('update');
Route::delete('professor/delete/{id}','ProfessorController@delete')->name('delete');

//Course
Route::get('course/create','CourseController@create')->name('create');
Route::post('course/create','CourseController@store')->name('store');
Route::get('course/edit/{id}','CourseController@edit')->name('edit');
Route::post('course/update/{id}','CourseController@update')->name('update');
Route::delete('course/delete/{id}','CourseController@delete')->name('delete');