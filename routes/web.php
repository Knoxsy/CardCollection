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
//
// Route::get('/register', 'SiteController@register');
// Route::get('/login', 'SiteController@login');
//
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'SiteController@home');
Route::get('/browse', 'SiteController@browse');
Route::get('/contact', 'SiteController@contact');

Route::get('/cards', 'CardController@index');
Route::get('/sets', 'SetController@show');
Route::get('/mycards', 'MyCardController@index');
Route::get('/tags', 'TagController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
