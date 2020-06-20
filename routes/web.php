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

Route::get('/', 'BerandaController@index');
Route::get('/graph', 'BerandaController@graph');
Route::get('/autocomplete', 'BerandaController@dataAjax');

Route::get('/kontak', 'BerandaController@kontak');
Route::get('/daftarwisata', 'BerandaController@listwisata');
Route::get('/read/{id}', 'BerandaController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/admin/tambahnode', 'Admin\\NodeController');
Route::resource('/tambahnode', 'Admin\\NodeController');
Route::resource('/admin/tambahrute', 'Admin\\TambahRuteController');
Route::resource('/tambahrute', 'Admin\\TambahRuteController');



Route::resource('/admin/wisatas', 'Admin\\wisatasController');
Route::resource('/admin', 'Admin\\wisatasController');


Route::get('/tampilpeta', 'Admin\\TambahRuteController@tampilpeta');
Route::get('/buatrute', 'Admin\\TambahRuteController@index');

