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


Route::get('/books', 'BookController@index');
Route::get('book/create', 'BookController@create');
Route::post('books', 'BookController@store');
Route::get('book/{id}/edit', 'BookController@edit');
Route::put('book/{id}', 'BookController@update');

Route::get('book/{id}', 'BookController@delete');

Route::get('book/{id}', 'BookController@book_detail');


Route::get('/language', 'LanguageController@index');
Route::post('/language', 'LanguageController@store');
Route::get('/language/{id}', 'LanguageController@destroy');

Route::get('/genre', 'GenreController@index');
Route::post('/genre', 'GenreController@store');
Route::get('/genre/{id}', 'GenreController@destroy');


Route::get('/authors', 'AuthorController@index');
Route::get('/author/create', 'AuthorController@create');
Route::post('/authors', 'AuthorController@store');

Route::get('/bookinstances', 'BookInstanceController@index');
Route::get('/bookinstance/create', 'BookInstanceController@create');
Route::post('/bookinstances', 'BookInstanceController@store');




Route::get('/p', function () {
    return view('welcome');
});
