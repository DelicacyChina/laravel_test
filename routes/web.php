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

// 错误视图
Route::get('error',function () {
    return abort(404);
});
// 文件上传视图
Route::get('file','FileController@index');
// 上传文件
Route::post('upload','FileController@upload');

Route::get('setSess','FileController@setSess');
Route::get('getSess','FileController@getSess');