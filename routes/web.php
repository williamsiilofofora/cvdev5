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

Route::get('/', 'AccueilController@index')->name('accueil.index');
Route::get('Create-Message', 'MessageController@create')->name('message.create');
Route::post('Store-Message', 'MessageController@store')->name('message.store');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');