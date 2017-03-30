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
    return view('home');
});
Route::get('/tes', function () {
    return view('admin/add_layanan');
});

Route::get('/layanan', 'LayananController@index');
Route::get('layanan/create','LayananController@create');
Route::post('layanan/store', 'LayananController@store');
Route::get('layanan/show/{id}', 'LayananController@show');