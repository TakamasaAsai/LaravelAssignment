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

Route::get('tests/test', 'TestController@index');

Route::get('message/index', 'MessagesController@index');

//authを入れれば、認証してから表示する

Route::group(['prefix' => 'message', 'middleware' => 'auth'], function (){
    Route::get('index', 'MessagesController@index')->name('message.index');
    Route::get('create', 'MessagesController@create')->name('message.create');
    Route::post('store', 'MessagesController@store')->name('message.store');
    Route::get('edit/{id}', 'MessagesController@edit')->name('message.edit');
    Route::post('update/{id}', 'MessagesController@update')->name('message.update');
    Route::post('destroy/{id}', 'MessagesController@destroy')->name('message.destroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
