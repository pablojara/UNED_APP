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

/*

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' .$name. ' with an id of ' .$id;
});

http://www.myunedapp.com:8000/

*/

Route::get('/', 'PagesController@index');
Route::get('/cookies', 'PagesController@cookies');
Route::get('/legal', 'PagesController@legal');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/noticias', 'PostsController@newsIndex');
Route::get('/promociones', 'PostsController@promotionsIndex');
Route::get('/servicios', 'PostsController@servicesIndex');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::resource('commerces', 'CommercesController');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('profiles', 'ProfileController');
Route::resource('profile', 'ProfileController@index');
