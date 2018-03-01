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

Route::group(['prefix'=>'admin' , 'middleware' => 'admin'],function (){
    Route::get('','HomeController@get_admin');

    Route::get('/categories','HomeController@get_categories');
    Route::post('/categories','HomeController@post_addCategory');
    Route::get('/categories/edit-category/{category_id}','HomeController@get_editCategory');
    Route::post('/categories/edit-category','HomeController@post_editCategory');
    Route::post('/categories/delete-category','HomeController@post_deleteCategory');
    Route::get('/categories/{category_id}','HomeController@get_categoryDetail');

    Route::get('/albums','HomeController@get_albums');
    Route::post('/albums','HomeController@post_addAlbum');
    Route::get('/albums/{album_id}','HomeController@get_detailAlbum');
    Route::get('/albums/edit-album/{album_id}','HomeController@get_editAlbum');
    Route::post('/albums/edit-album','HomeController@post_editAlbum');
    Route::post('/albums/delete-album','HomeController@post_deleteAlbum');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
