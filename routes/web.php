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
/*Route::post('testimoni/store', function () {
   echo "hahahah";
});
*/
Route::get('/layanan', 'LayananController@index');
Route::get('layanan/create','LayananController@create');
Route::post('layanan/store', 'LayananController@store');
Route::get('layanan/show/{id}', 'LayananController@show');
Route::get('layanan/edit/{id}', 'LayananController@edit');
Route::post('layanan/update/{id}', 'LayananController@update');
Route::get('layanan/destroy/{id}', 'LayananController@destroy');

Route::get('/fasilitas', 'FasilitasController@index');
Route::get('/fasilitas/create', 'FasilitasController@create');
Route::post('/fasilitas/store', 'FasilitasController@store');
Route::get('/fasilitas/show/{id}', 'FasilitasController@show');
Route::get('/fasilitas/edit/{id}', 'FasilitasController@edit');
Route::post('/fasilitas/update/{id}', 'FasilitasController@update');
Route::get('/fasilitas/destroy/{id}', 'FasilitasController@destroy');


Route::get('/tim', 'TimController@index');
Route::get('/tim/create', 'TimController@create');
Route::post('/tim/store', 'TimController@store');
Route::get('/tim/show/{id}', 'TimController@show');
Route::get('/tim/edit/{id}', 'TimController@edit');
Route::post('/tim/update/{id}', 'TimController@update');
Route::get('/tim/destroy/{id}', 'TimController@destroy');

Route::get('/testimoni', 'TestimoniController@index');
Route::get('/testimoni/create', 'TestimoniController@create');
Route::post('/testimoni/store', 'TestimoniController@store');
Route::get('/testimoni/show/{id}', 'TestimoniController@show');
Route::get('/testimoni/edit/{id}', 'TestimoniController@edit');
Route::post('/testimoni/update/{id}', 'TestimoniController@update');
Route::get('/testimoni/destroy/{id}', 'TestimoniController@destroy');

Route::get('/berita', 'BeritaController@index');
Route::get('/berita/create', 'BeritaController@create');
Route::post('/berita/store', 'BeritaController@store');
Route::get('/berita/show/{id}', 'BeritaController@show');
Route::get('/berita/edit/{id}', 'BeritaController@edit');
Route::post('/berita/update/{id}', 'BeritaController@update');
Route::get('/berita/destroy/{id}', 'BeritaController@destroy');