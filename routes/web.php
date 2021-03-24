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
    return view('welcome');
});

Route::get('admin','App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('adminLogout');
//Route::get('admin/login', ['as' => '', 'uses' => 'App\Http\Controllers\Auth\AdminAuthController@getLogin'])->name('adminLoginPost');
Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');	
});