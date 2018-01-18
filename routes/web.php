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

Route::get('/', [
	'as' => 'home',
	'uses' => 'PageController@home'
]);

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('posts', 'PostController');
Route::get('tags/{tag}', 'TagController@index');
Route::get('categories/{category}', 'CategoryController@index');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@send');
