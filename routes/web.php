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

Route::get('/', 'PersonController@index')->name('mainPage');
Route::get('/person/{id}', 'PersonController@show')->name('showPerson');
Route::get('/contacts', 'PersonController@contacts')->name('contactsPage');
Route::post('/sendmail', 'Ajax\ContactController@send');