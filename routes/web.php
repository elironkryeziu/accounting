<?php

use App\Pije;
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
Route::get('/furnitoret', 'FurnizimetController@furnitoret')->name('furnitoret');
Route::post('/addfurnitor', 'FurnizimetController@addFurnitor')->name('addFurnitor');
Route::delete('/furnitoret/{id}', 'FurnizimetController@deleteFurnitor');
Route::get('/furnitoret/new', function () {
    return view('new-furnitoret');
});

// furnizimet
Route::get('/furnizimet', 'FurnizimetController@get')->name('furnizimet');
Route::get('/furnizimet/new', 'FurnizimetController@newFurnizimet');
Route::post('/addfurnizim', 'FurnizimetController@addFurnizim')->name('addFurnizim');


//shpenzimet
Route::get('/shpenzimet', 'ShpenzimetController@get')->name('shpenzimet');
Route::post('/addshpenzim', 'ShpenzimetController@add')->name('addShpenzim');
Route::get('/shpenzimet/new', function () {
    $data = [
        'date' => today()->toDateString()
    ];
    return view('new-shpenzim',$data);
});

//pijet
Route::get('/pijet', 'PijetController@get');
Route::post('/pijetlist', 'PijetController@list')->name('pijetlist');
Route::post('/pijet', 'PijetController@add')->name('addFurnizimpije');

Route::get('/choose-pijet', function () {
    $pijet = Pije::all();
    $data = [
        'pijet' => $pijet
    ];
    return view('choose-pijet',$data);
});

