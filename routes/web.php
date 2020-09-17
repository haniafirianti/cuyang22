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
	// broadcast(new WebsocketEvent('some data'));

    return view('welcome');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/perpustakaan', function () {
    return view('perpustakaan');
});

Auth::routes();


Route::group(['middleware' => ['DisablePreventBack', 'auth'] ], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/home/about', 'HomeController@about');
});

Route::resource('anggota', 'AnggotaController');
Route::resource('kategori', 'KategoriController');
Route::resource('buku', 'BukuController');
Route::resource('transaksi', 'TransaksiController');
Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
Route::get('transaksi/getAnggota/{id}', 'TransaksiController@getAnggota');
Route::post('/transaksi/update/{id}', 'TransaksiController@update');


Route::get('users','UserController@create');
