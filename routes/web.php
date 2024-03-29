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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/projects', 'ProjectsController')->middleware('auth');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
