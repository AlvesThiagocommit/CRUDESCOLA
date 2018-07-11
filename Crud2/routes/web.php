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


Route::get('/','StudentController@index')->name('home');

//Aluno
Route::get('create','StudentController@create')->name('create');
Route::post('create','StudentController@store')->name('store');
Route::get('edit/{id}','StudentController@edit')->name('edit');
Route::post('update/{id}','StudentController@update')->name('update');
Route::delete('delete/{id}','StudentController@delete')->name('delete');

//Professor
Route::get('create','ProfessorController@create')->name('create');
Route::post('create','ProfessorController@store')->name('store');
Route::get('edit/{id}','ProfessorController@edit')->name('edit');
Route::post('update/{id}','ProfessorController@update')->name('update');
Route::delete('delete/{id}','ProfessorController@delete')->name('delete');

//Course
Route::get('create','CourseController@create')->name('create');
Route::post('create','CourseController@store')->name('store');
Route::get('edit/{id}','CourseController@edit')->name('edit');
Route::post('update/{id}','CourseController@update')->name('update');
Route::delete('delete/{id}','CourseController@delete')->name('delete');