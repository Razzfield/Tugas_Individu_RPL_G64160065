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


Auth::routes();

Route::get('/', 'PostController@index')->name('post.index');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::post('/post/{post}/edit', 'PostController@edit')->name('post.toedit');
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
