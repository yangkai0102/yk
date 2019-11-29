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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/admin/login/login','Admin\LoginController@login');
Route::post('/admin/login/loginDo','Admin\LoginController@loginDo');

Route::get('/admin/new/create','Admin\AdminController@create')->middleware('checklogin');
Route::post('/admin/admin/store','Admin\AdminController@store')->middleware('checklogin');
Route::get('/admin/new/index','Admin\AdminController@index')->middleware('checklogin');
Route::get('/storage/app/photo/','Admin\AdminController@index')->middleware('checklogin');

Route::get('/admin/admin/content/{id}','Admin\AdminController@content')->middleware('checklogin');
Route::get('/admin/admin/url','Admin\AdminController@url')->middleware('checklogin');



