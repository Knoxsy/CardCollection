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

Auth::routes();

Route::get('/', 'SiteController@home');
Route::get('/browse', 'SiteController@browse');
Route::get('/contact', 'SiteController@contact');
Route::get('/profile', 'SiteController@profile');

Route::get('/login', 'LoginController@login');
Route::get('/card', 'CardController@index');
Route::get('/card/{card}', 'CardController@show')->name("showcard");
Route::get('/set', 'SetController@index');
Route::get('/set/{set}', 'SetController@show')->name("showset");
Route::get('/mycards', 'MyCardController@index');
Route::get('/profile', 'ProfileController@index');

Route::delete('/mycard', 'MyCardController@destroy')->name('deleteMyCard');
Route::post('/mycard', 'MyCardController@store')->name('storeMyCard');
