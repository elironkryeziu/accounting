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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//furnitoret
Route::get('/furnitoret', 'FurnizimetController@furnitoret');
Route::post('/addfurnitor', 'FurnizimetController@addFurnitor')->name('addFurnitor');
Route::delete('/furnitoret/{id}', 'FurnizimetController@deleteFurnitor');
Route::get('/furnitoret/new', function () {
    return view('new-furnitoret');
});

// furnizimet
Route::get('/furnizimet', 'FurnizimetController@get');

//shpenzimet
Route::get('/shpenzimet', 'ShpenzimetController@get');

