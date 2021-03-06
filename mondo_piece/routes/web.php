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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MusicsController@top')->name('top');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/music', 'MusicsController@music')->name('musics.music');
    Route::post('/music/create', 'MusicsController@create')->name('musics.create');
    Route::get('/music/list', 'MusicsController@GetList')->name('musics.GetList');
    Route::get('/music/{id}', 'MusicsController@ShowMusic')->name('musics.ShowMuisc');
    Route::get('/music/{id}/edit', 'MusicsController@edit')->name('musics.edit');
    Route::post('/music/{id}/edit', 'MusicsController@update')->name('musics.update');
    Route::post('/music/{id}/delete', 'MusicsController@delete')->name('musics.delete');

    Route::post('/comment/create', 'CommentsController@create');
    Route::get('/comment/list', 'CommentsController@getList');
    Route::get('/comment/{id}/edit', 'CommentsController@edit')->name('comment.edit');
    Route::post('/comment/{id}/edit', 'CommentsController@update')->name('comment.update');
    Route::post('/comment/{id}/delete', 'CommentsController@delete')->name('comment.delete');

    Route::get('/mypage', 'UsersController@mypage')->name('mypage');
    Route::get('/mypage/edit', 'UsersController@edit')->name('mypage.edit');
    Route::post('/mypage/{id}/edit', 'UsersController@update')->name('mypage.update');

});