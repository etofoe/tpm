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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'],function (){

    Route::get('add','App\Http\Controllers\BookController@create');
    Route::post('add','App\Http\Controllers\BookController@store')->name('add-book');
    Route::get('book','App\Http\Controllers\BookController@index')->name('get-book');
    Route::get('edit/{id}','App\Http\Controllers\BookController@edit')->name('edit-book-page');
    Route::post('edit/{id}','App\Http\Controllers\BookController@update')->name('edit-book');
    Route::delete('{id}','App\Http\Controllers\BookController@destroy')->name('delete-book');


    Route::get('school/add','App\Http\Controllers\SchoolController@create');
    Route::post('school/add','App\Http\Controllers\SchoolController@store')->name('add-school');
    Route::get('school/','App\Http\Controllers\SchoolController@index')->name('get-school');
    Route::get('school/edit/{id}','App\Http\Controllers\SchoolController@edit')->name('edit-school-page');
    Route::post('school/edit/{id}','App\Http\Controllers\SchoolController@update')->name('edit-school');
    Route::delete('school/{id}','App\Http\Controllers\SchoolController@destroy')->name('delete-school');

    Route::get('car/add','App\Http\Controllers\CarsController@create');
    Route::post('car/add','App\Http\Controllers\CarsController@store')->name('add-car');
    Route::get('car/','App\Http\Controllers\CarsController@index')->name('get-car');
    Route::get('car/edit/{id}','App\Http\Controllers\CarsController@edit')->name('edit-car-page');
    Route::post('car/edit/{id}','App\Http\Controllers\CarsController@update')->name('edit-Car');
    Route::delete('car/{id}','App\Http\Controllers\CarsController@destroy')->name('delete-car');
});
