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

Route::get('/quest', 'QuestController@show')->name('quest.show');
Route::post('/quest', 'QuestController@submit')->name('quest.submit');
Route::get('/quest/result', 'ResultController@show')->name('result.show');