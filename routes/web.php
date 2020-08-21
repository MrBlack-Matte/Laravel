<?php

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
    return view('auth.login');
});
Route::get('/contacts','ContactController@index')->middleware('auth');
// Route::get('/home','MyController@index');
Route::get('/contacts/views','MyController@views')->middleware('auth');
Route::post('/contacts/store','MyController@store')->middleware('auth');
Route::get('/edit/{id}','MyController@edit')->middleware('auth');
Route::get('/delete/{id}','MyController@destroy')->middleware('auth');
Route::post('/update/{id}','MyController@update')->middleware('auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

