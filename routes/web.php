<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\User\Users;
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

Route::get('/chat', 'HomeController@index')->name('chat');
Route::get('/profiles', 'HomeController@profile');

Route::group(['prefix' => 'message'], function () {
    Route::get('user/{query}', 'MessageController@user');
    Route::get('user-message/{id}', 'MessageController@message');
    Route::get('user-message/{id}/read', 'MessageController@read');
    Route::post('user-message', 'MessageController@send');
});

Route::view('/pengguna', 'livewire.user.master');
