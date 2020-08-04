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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','Admin\CategoryController')->middleware('auth');
Route::resource('food','Admin\FoodController')->middleware('auth');

Route::get('/', 'Admin\FoodController@listFood');
Route::get('/foods/{id}', 'Admin\FoodController@view')->name('food.view');