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

//Route::get('contact/index', 'ContactFormController@index');
Route::get('message/index', 'MessagesController@index');

//authを入れれば、認証してから表示する
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function (){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store');
    Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
    Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
    Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
    Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
});

Route::group(['prefix' => 'message', 'middleware' => 'auth'], function (){
    Route::get('index', 'MessagesController@index')->name('message.index');
    Route::get('create', 'MessagesController@create')->name('message.create');
    Route::post('store', 'MessagesController@store')->name('message.store');
//    Route::get('show/{id}', 'MessagesController@show')->name('message.show');
    Route::get('edit/{id}', 'MessagesController@edit')->name('message.edit');
    Route::post('update/{id}', 'MessagesController@update')->name('message.update');
    Route::post('destroy/{id}', 'MessagesController@destroy')->name('message.destroy');
});

//REST
//Route::resource('contacts', 'ContactFormController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
