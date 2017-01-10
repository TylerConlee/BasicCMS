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
Route::get('/', 'PageController@index');
Route::get('admin', 'PageController@admin');
Route::get('admin/trash', 'PageController@trash');
Route::get('database/insert', 'DatabaseController@index');
Route::get('database/delete', 'DatabaseController@delete');
Route::get('database/select', 'DatabaseController@select');
Route::get('{slug}', 'PageController@show');
Route::get('page/{id}/restore', 'PageController@restore');
Route::post('page/{id}/delete', 'PageController@delete');
Route::resource('page', 'PageController', ['except' => ['show', 'restore', 'delete']]);
