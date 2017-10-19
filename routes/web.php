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
    return view('index');
});

Route::get('/ocean/arctic', function () {
    return view('/oceans/arctic');
});

Route::get('/ocean/atlantic', function () {
    return view('/oceans/atlantic');
});

Route::get('/ocean/indian', function () {
    return view('/oceans/indian');
});

Route::get('/ocean/pacific', function () {
    return view('/oceans/pacific');
});

Route::get('/ocean/southern', function () {
    return view('/oceans/southern');
});
