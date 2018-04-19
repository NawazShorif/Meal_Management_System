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
Route::get('status', 'statusController@statusMethod')->name('status');
Route::get('myTodayBuzzer','buzzerController@index')->name('myTodayBuzzer');
Route::get('mymeal','mealController@index')->name('mymeal');
Route::get('totalVC','totalviewController@mealRate');
Route::get('mh','mealHistry@mymh')->name('mh');
Route::get('bh','buzzerHistry@mybh')->name('bh');
Route::get('aus','aluserStatus@allUS')->name('aus');
Route::get('aUB','allUserBuzzer@aub')->name('aUB');
Route::get('aUM','allUserMeal@aum')->name('aUM');

Route::resource('mtb','buzzerController');
Route::resource('mymc','mealController');
