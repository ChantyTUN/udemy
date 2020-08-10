<?php

namespace App\Http\Controllers\Admin;

use App\Model\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function create(){
        return view('exam.assign');
    }

    public function assignExam(Request $request){
        $quiz = (new Quiz)->assignExam($request->all());
        return redirect()->back()->with('message','You assign already!');
    }
}
