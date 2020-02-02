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

Route::get('/', 'FirstFormController@index');
Route::post('/secondpage','FirstFormController@secondPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'SellingInfoController@create');
Route::post('/add_item','SellingInfoController@store');

