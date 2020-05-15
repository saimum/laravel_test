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
Route::get('users/test_get','users@test_get');

Route::get('users/index','users@index');

Route::get('users/create_get','users@create_get');
Route::post('users/create_post','users@create_post');

Route::get('users/view','users@view');

Route::get('users/session_get','users@session_get');
Route::post('users/session_post','users@session_post');
