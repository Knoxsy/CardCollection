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

Route::resource('card', 'CardController');
Route::resource('tag', 'TagController');
Route::resource('mycard', 'MyCardController');
Route::resource('set', 'SetController');
