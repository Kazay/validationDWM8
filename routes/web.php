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
    return view('home');
});

Route::get('/labels', 'LabelController@display');
Route::get('/artists', 'ArtistController@display');
Route::get('/albums', 'AlbumController@display');

Route::post('/labels/add', 'LabelController@add');
Route::post('/artists/add', 'ArtistController@add');
Route::post('/albums/add', 'AlbumController@add');

Route::post('/labels/delete/{id}', 'LabelController@delete');
Route::post('/artists/delete/{id}', 'ArtistController@delete');
Route::post('/albums/delete/{id}', 'AlbumController@delete');

Route::get('/labels/update/{id}', 'LabelController@update');
Route::post('/labels/update-action/', 'LabelController@updateAction');

Route::get('/artists/update/{id}', 'ArtistController@update');
Route::post('/artists/update-action/', 'ArtistController@updateAction');

Route::get('/albums/update/{id}', 'AlbumController@update');
Route::post('/albums/update-action/', 'AlbumController@updateAction');

Route::get('/stocks', 'AlbumController@displayStocks');
Route::post('/stocks/update/{id}', 'AlbumController@updateActionStocks');