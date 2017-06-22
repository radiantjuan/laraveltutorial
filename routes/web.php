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

Route::get('/', 'PostsController@index')->name('home');


Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comment', 'PostsController@addComment');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create')->name('login');
Route::post('/login','SessionController@store');

Route::get('/logout','SessionController@destroy');