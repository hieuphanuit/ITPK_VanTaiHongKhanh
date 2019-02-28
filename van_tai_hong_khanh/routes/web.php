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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

Route::get('/admin', 'TrangAdminController@view')->middleware('auth');
Route::get('/admin/gioi-thieu', 'TrangAdminController@viewGioiThieu')->middleware('auth');

//dịch vụ
Route::get('/admin/dich-vu/create', 'DichVuController@create')->middleware('auth');
Route::get('/admin/dich-vu', 'DichVuController@indexAdmin')->middleware('auth');
Route::get('/admin/dich-vu/{id}', 'DichVuController@showAdmin')->middleware('auth');
Route::get('/admin/dich-vu/{id}/edit', 'DichVuController@edit')->middleware('auth');
Route::post('/admin/dich-vu', 'DichVuController@store')->middleware('auth');
Route::post('/admin/dich-vu/update', 'DichVuController@update')->middleware('auth');
Route::post('/admin/dich-vu/delete', 'DichVuController@destroy')->middleware('auth');

//bán xe ban-xe
Route::get('/admin/ban-xe/create', 'BanXeController@create')->middleware('auth');
Route::get('/admin/ban-xe', 'BanXeController@indexAdmin')->middleware('auth');
Route::get('/admin/ban-xe/{id}', 'BanXeController@showAdmin')->middleware('auth');
Route::get('/admin/ban-xe/{id}/edit', 'BanXeController@edit')->middleware('auth');
Route::post('/admin/ban-xe', 'BanXeController@store')->middleware('auth');
Route::post('/admin/ban-xe/update', 'BanXeController@update')->middleware('auth');
Route::post('/admin/ban-xe/delete', 'BanXeController@destroy')->middleware('auth');

//tuyen dung
Route::get('/admin/tuyen-dung', 'TuyenDungController@indexAdmin')->middleware('auth');
Route::post('/admin/tuyen-dung/update', 'TuyenDungController@update')->middleware('auth');

//tin tuc
Route::get('/admin/tin-tuc/create', 'BanXeController@create')->middleware('auth');
Route::get('/admin/tin-tuc', 'BanXeController@indexAdmin')->middleware('auth');
Route::get('/admin/tin-tuc/{id}', 'BanXeController@showAdmin')->middleware('auth');
Route::get('/admin/tin-tuc/{id}/edit', 'BanXeController@edit')->middleware('auth');
Route::post('/admin/tin-tuc', 'BanXeController@store')->middleware('auth');
Route::post('/admin/tin-tuc/update', 'BanXeController@update')->middleware('auth');
Route::post('/admin/tin-tuc/delete', 'BanXeController@destroy')->middleware('auth');
