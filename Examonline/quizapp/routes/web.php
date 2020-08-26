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



Auth::routes([

	'register'=>false,
	'reset'=>false,
	'verify'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/quiz/{quizId}','ExamController@getQuizQuestions');

Route::post('quiz/create','ExamController@postQuiz')->middleware('auth');

Route::get('/result/user/{userId}/quiz/{quizId}','ExamController@viewResult')->middleware('auth');






Route::group(['middleware'=>'isAdmin'],function(){
	Route::get('/', function () {
    return view('admin.index');
});

	Route::resource('quiz','QuizController');
	Route::resource('question','QuestionController');
	Route::resource('user','UserController');

	Route::get('/quiz/{id}/questions','QuizController@question')->name('quiz.question');

	Route::get('exam/assign','ExamController@create')->name('user.exam');
	Route::post('exam/assign','ExamController@assignExam')->name('exam.assign');
  	Route::get('exam/user','ExamController@userExam')->name('view.exam');
	Route::post('exam/remove','ExamController@removeExam')->name('exam.remove');
   Route::get('result','ExamController@result')->name('result');
   Route::get('result/{userId}/{quizId}','ExamController@userQuizResult');





});

