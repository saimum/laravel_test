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

Route::get('users/set_session_get','users@set_session_get');
Route::post('users/set_session_post','users@set_session_post');

Route::group(['middleware'=>['CustomLoginAuthentication']],function(){
    Route::get('users/view/{id}','users@view');
});

Route::get('productcategory/blank_page','productcategory@blank_page');
Route::get('productcategory/productcategory_create','productcategory@productcategory_create');
Route::post('productcategory/productcategory_create','productcategory@productcategory_create');