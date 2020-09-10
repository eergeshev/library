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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/book', 'BookController@index');
Route::get('book/create', 'BookController@create');
Route::post('book', 'BookController@store');
Route::get('book/{id}/edit', 'BookController@edit');
Route::put('book/{id}', 'BookController@update');

Route::get('book/{id}', 'BookController@delete');

Route::get('/language', 'LanguageController@index');
Route::post('/language', 'LanguageController@store');
Route::get('/language/{id}', 'LanguageController@destroy');

Route::get('/p', function () {
    return view('welcome');
});
