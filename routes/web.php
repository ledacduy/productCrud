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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');

Route::get('/create', 'ProductController@create')->name('product.create');
Route::get('/edit/{product}', 'ProductController@edit')->name('product.edit');
Route::post('/store', 'ProductController@store')->name('product.store');
Route::delete('/delete/{product}', 'ProductController@destroy')->name('product.destroy');
Route::post('/update/{product}', 'ProductController@update')->name('product.update');


