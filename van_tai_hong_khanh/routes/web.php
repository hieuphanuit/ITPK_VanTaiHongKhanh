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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

Route::get('/admin', 'TrangAdminController@view')->middleware('auth');

//Giới thiệu
//back-end
Route::get('/admin/gioi-thieu', 'GioiThieuController@indexAdmin')->middleware('auth');
Route::post('/admin/gioi-thieu/update', 'GioiThieuController@update')->middleware('auth');
//front-end
Route::get('/gioi-thieu', 'GioiThieuController@index');



//dịch vụ
Route::get('/admin/dich-vu/create', 'DichVuController@create')->middleware('auth');
Route::get('/admin/dich-vu', 'DichVuController@indexAdmin')->middleware('auth');
Route::get('/admin/dich-vu/{id}', 'DichVuController@showAdmin')->middleware('auth');
Route::get('/admin/dich-vu/{id}/edit', 'DichVuController@edit')->middleware('auth');
Route::post('/admin/dich-vu', 'DichVuController@store')->middleware('auth');
Route::post('/admin/dich-vu/update', 'DichVuController@update')->middleware('auth');
Route::post('/admin/dich-vu/delete', 'DichVuController@destroy')->middleware('auth');

Route::get('/dich-vu/{tieu_de}', 'DichVuController@show');
Route::get('/dich-vu', 'DichVuController@index');

//bán xe ban-xe
Route::get('/admin/ban-xe/create', 'BanXeController@create')->middleware('auth');
Route::get('/admin/ban-xe', 'BanXeController@indexAdmin')->middleware('auth');
Route::get('/admin/ban-xe/{id}', 'BanXeController@showAdmin')->middleware('auth');
Route::get('/admin/ban-xe/{id}/edit', 'BanXeController@edit')->middleware('auth');
Route::post('/admin/ban-xe', 'BanXeController@store')->middleware('auth');
Route::post('/admin/ban-xe/update', 'BanXeController@update')->middleware('auth');
Route::post('/admin/ban-xe/delete', 'BanXeController@destroy')->middleware('auth');

Route::get('/ban-xe/{tieu_de}', 'BanXeController@show');
Route::get('/ban-xe', 'BanXeController@index');


//tuyen dung
Route::get('/admin/tuyen-dung', 'TuyenDungController@indexAdmin')->middleware('auth');
Route::post('/admin/tuyen-dung/update', 'TuyenDungController@update')->middleware('auth');

Route::get('/tuyen-dung', 'TuyenDungController@index');

//tin tuc
Route::get('/admin/tin-tuc/create', 'TinTucController@create')->middleware('auth');
Route::get('/admin/tin-tuc', 'TinTucController@indexAdmin')->middleware('auth');
Route::get('/admin/tin-tuc/{id}', 'TinTucController@showAdmin')->middleware('auth');
Route::get('/admin/tin-tuc/{id}/edit', 'TinTucController@edit')->middleware('auth');
Route::post('/admin/tin-tuc', 'TinTucController@store')->middleware('auth');
Route::post('/admin/tin-tuc/update', 'TinTucController@update')->middleware('auth');
Route::post('/admin/tin-tuc/delete', 'TinTucController@destroy')->middleware('auth');

Route::get('/tin-tuc/{tieu_de}', 'TinTucController@show');

//lien he
Route::get('/admin/lien-he/', 'LienHeController@indexAdmin')->middleware('auth');
Route::post('/admin/lien-he/update', 'LienHeController@update')->middleware('auth');

Route::get('/lien-he', 'LienHeController@index');

Route::post('/lien-he', 'LienHeController@submitForm');
//thong tin lien he
Route::get('/admin/thong-tin-lien-he', 'ThongTinLienHeController@indexAdmin')->middleware('auth');

//cai dat 
Route::get('/admin/cai-dat', 'CaiDatController@indexAdmin')->middleware('auth');
Route::post('/admin/cai-dat/update', 'CaiDatController@update')->middleware('auth');

//slider
Route::get('/admin/slider', 'SliderController@indexAdmin')->middleware('auth');
Route::post('/admin/slider/update', 'SliderController@update')->middleware('auth');


//moi gioi bds
Route::get('/admin/moi-gioi-bds', 'MoiGioiBdsController@indexAdmin')->middleware('auth');
Route::get('/admin/moi-gioi-bds/create', 'MoiGioiBdsController@create')->middleware('auth');
Route::post('/admin/moi-gioi-bds', 'MoiGioiBdsController@store')->middleware('auth');
Route::post('/admin/moi-gioi-bds/delete', 'MoiGioiBdsController@destroy')->middleware('auth');