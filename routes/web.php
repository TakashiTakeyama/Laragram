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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', 'ArticleController')->middleware('auth');
Route::get('articles', 'ArticleController@getAuth');
Route::post('articles', 'ArticleController@getAuth');
Auth::routes();
Route::get('articles/add', 'ArticleController@add');
Route::post('articles/add', 'ArticleController@create');

Route::get('/home', 'HomeController@index')->name('home');