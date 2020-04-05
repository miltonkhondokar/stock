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

Route::get('/open', function () {
    return view('stock.admin.page_content.json_data.open_p');
});

Route::get('/high', function () {
    return view('stock.admin.page_content.json_data.high_p');
});

Route::get('/low', function () {
    return view('stock.admin.page_content.json_data.low_p');
});

Route::get('/close', function () {
    return view('stock.admin.page_content.json_data.close_p');
});

Route::get('/dashboard','StockController@index');
