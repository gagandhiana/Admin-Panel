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

//Menus

// Login Page

Route::get('/login-page','App\Http\Controllers\IController@login_page');
Route::post('/login-details-submit','App\Http\Controllers\IController@login');

// Add Page

Route::get('/homepage','App\Http\Controllers\IController@home_page');
Route::post('/page-det','App\Http\Controllers\IController@page_det');
Route::get('/page_summary','App\Http\Controllers\IController@pagesummary');
Route::post('search-record','App\Http\Controllers\IController@search');
Route::get('/edit-disp/{id}','App\Http\Controllers\IController@editdisp');
Route::post('edit-form/{id}','App\Http\Controllers\IController@editdata');
Route::get('/delete-data/{id}','App\Http\Controllers\IController@deletedata');

// Category Page

Route::get('/add_cat','App\Http\Controllers\IController@addcat');
Route::post('/add-category','App\Http\Controllers\IController@add_category');
Route::get('/category_summary','App\Http\Controllers\IController@categorysummary');
Route::post('search-category','App\Http\Controllers\IController@searchcategory');
Route::get('/delete-cat/{id}','App\Http\Controllers\IController@delete_cat');
Route::get('/edit-cat/{id}','App\Http\Controllers\IController@edit_cat');
Route::post('edit-category/{id}','App\Http\Controllers\IController@edit_category');

// Product Page

Route::get('/add_pro','App\Http\Controllers\IController@addpro');

Route::post('/add-product','App\Http\Controllers\IController@add_product');
Route::get('/product_summary','App\Http\Controllers\IController@prosummary');

Route::post('search-product','App\Http\Controllers\IController@search_product');

Route::get('/delete-pro/{id}','App\Http\Controllers\IController@delete_pro');

Route::get('/edit-pro/{id}','App\Http\Controllers\IController@edit_pro');
Route::post('edit-product/{id}','App\Http\Controllers\IController@edit_product');

// Change Password

Route::get('change_password','App\Http\Controllers\IController@change_pw');
Route::post('change-password-submit/{id}','App\Http\Controllers\IController@change_password_submit');

// Logout

Route::get('logout','App\Http\Controllers\IController@logout_page');
