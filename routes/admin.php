<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::group(['namespace'=>'Admin', 'middleware' => 'guest:admin'],function(){
    Route::get('login','LoginController@getLogin');
    Route::post('login','LoginController@Login') -> name('admin.login');
});