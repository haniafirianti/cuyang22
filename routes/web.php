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
	return view('auth.login');
});


Route::get('/logout', function () {
	Auth::logout();
	return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => 'DisablePreventBack'], function () {

	Route::get('/dashboard', function () {
		return view('users.dashboard');
	})->name('dashboard');
});


Route::group(['middleware' => ['role:admin', 'DisablePreventBack']], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/home/about', 'HomeController@about');

	Route::get('/perpustakaan', function () {
		return view('perpustakaan');
	});

	Route::resource('anggota', 'AnggotaController');
	Route::resource('kategori', 'KategoriController');
	Route::resource('buku', 'BukuController');
	Route::resource('transaksi', 'TransaksiController');
	Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
	Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
	Route::get('transaksi/getAnggota/{id}', 'TransaksiController@getAnggota');
	Route::post('/transaksi/update/{id}', 'TransaksiController@update');
	Route::get('/change-password', 'UserController@createChangePassword');
	Route::post('/change-password', 'UserController@StoreChangePassword');
	Route::post('/profile', 'UserController@update_avatar');

	Route::get('/kelola-users', 'UserController@index');
	Route::post('/users', 'UserController@store');
	Route::put('/users/update/{id}', 'UserController@update');
	Route::delete('/users/{id}', 'UserController@destroy');

});




