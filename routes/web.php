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

Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::get('/login', 'SiteController@login');
Route::get('/loggedin_collection', 'SiteController@loggedin_collection');
Route::get('/card', 'CardController@index');
Route::get('/set', 'SetController@index');
Route::get('/mycard', 'MyCardController@index');
Route::get('/tag', 'TagController@index');

//Route::get('/browse', 'SetController@index');
