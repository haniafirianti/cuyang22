<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
	return view('Auth.login');
});


Route::get('/logout', function () {
	Auth::logout();
	return redirect('/login');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['role:admin', 'DisablePreventBack']], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/home/about', 'HomeController@about');

	Route::get('/change-password', 'UserController@createChangePassword');
	Route::post('/change-password', 'UserController@StoreChangePassword');
	Route::post('/profile', 'UserController@update_avatar');

	Route::get('/kelola-users', 'UserController@index')->name('kelola-users');
	Route::post('/users', 'UserController@store');
	Route::put('/users/update/{id}', 'UserController@update');
	Route::delete('/users/{id}', 'UserController@destroy');

	Route::get('contact/{id}', 'ContactController@create');
	Route::post('contact/{id}', 'ContactController@store');

	Route::get('show-contacts', 'ContactController@index');
	Route::put('/contacts/update/{id}', 'ContactController@update');
	Route::delete('/contacts/{id}', 'ContactController@destroy');
});



Route::group(['middleware' => 'DisablePreventBack'], function () {

	Route::get('/dashboard', function () {
		return view('users.dashboard');
	})->name('dashboard')->middleware('verified');

	Route::get('/setting-users', 'UserController@createChangePasswordUsers');
	Route::post('/change-password', 'UserController@StoreChangePasswordUsers');
	Route::post('/setting-users', 'UserController@update_avatarUsers');

	Route::get('/report/{id}', 'UserController@createReport');
	Route::post('/report/{id}', 'UserController@storeReport');

	Route::get('/profile', 'UserController@profile');
});


Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products/show/{id}', 'ProductController@show');
Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/category-products', 'CategoryController@index');
Route::post('/category-products', 'CategoryController@store');
Route::delete('/category-products/{id}', 'CategoryController@destroy');



Route::get('/coba', function () {
	return view('kerangka_view');
});
