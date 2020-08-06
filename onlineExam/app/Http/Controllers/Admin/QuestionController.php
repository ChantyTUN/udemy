<?php

namespace App\Http\Controllers\Admin;

use App\Model\Quiz;
use App\Model\Answer;
use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = (new Question)->getQuestions();
        return view('backend.question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quizes = (new Quiz)->allQuiz();
        return view('backend.question.create',compact('quizes'));
    }

 
    public function store(Request $request)
    {
        // $data = $this->validateForm($request);
        $data = $request->all();
        $question = (new Question)->storeQuestion($data);
        $Answer = (new Answer)->storeAnswer($data,$question);
        return redirect()->route('question.create')->with('message','Question created successfully');
    }


    public function show($id)
    {
        $question = (new Question)->getQuestionById($id);
        return view('backend.question.show',compact('question'));
    }


    public function edit($id)
    {
        $question =(new Question)->findQuestion($id);
        return view('backend.question.edit',compact('question'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function validateForm($request){
        return $this->validate($request, [
            'quiz'=>'required',
            'question'=>'required|min:3',
            'options'=>'bail|required|array|min:3', // use bial = array []            
            'options.*'=>'bail|required|string|distinct', // use bial = ខុសគ្នា  Option 1,2,3,4            
            'correct_answer'=>'required'           
        ]);
    }
}
