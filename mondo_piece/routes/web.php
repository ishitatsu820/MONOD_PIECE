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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/music', 'MusicsController@music')->name('musics.music');
    Route::post('/music/create', 'MusicsController@create')->name('musics.create');
    Route::get('/music/list', 'MusicsController@GetList')->name('musics.GetList');
    Route::get('/music/{id}', 'MusicsController@ShowMusic')->name('musics.ShowMuisc');

    Route::post('/comment/create', 'CommentsController@create');

});
