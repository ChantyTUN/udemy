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
    return view('admin.index');
});

Auth::routes([
    'register' => false,
    'reset' =>false,
    'verify' =>false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'isAdmin'], function(){

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('quiz','Admin\QuizController');
    Route::resource('question','Admin\QuestionController');
    Route::resource('user','Admin\UserController');

    Route::get('/quiz/{id}/questions','Admin\QuizController@question')->name('quiz.question');
    
    Route::get('exam/assign','Admin\ExamController@create');
    Route::post('exam/assign','Admin\ExamController@assignExam')->name('exam.assign');


});
