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

Route::get('/', 'IndexController@index');
Route::get('/ocean/{name}', 'OceanController@show');

Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');

Route::get('/movies', 'IndexController@movies_homepage');
Route::get('/movies/list', 'movieController@listing');
Route::get('/movies/movie/{id}', 'movieController@detail')->name('movies detail');
Route::get('/movies/movie/test_insert', 'movieController@test_insert');
Route::get('/movies/new', 'movieController@create');
Route::post('/movies/new', 'movieController@store');
Route::get('/movies/edit/{id}', 'movieController@edit');
Route::post('/movies/edit/{id}', 'movieController@store');
// it can be done also with any
//Route::any('/movies/create', 'movieController@create');


// exercise of 8weeks wednesday morning
Route::get('roles/new', 'roleController@create');
Route::post('roles/new', 'roleController@store');
Route::get('roles/edit/{id}', 'roleController@edit');
Route::post('roles/edit/{id}', 'roleController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
