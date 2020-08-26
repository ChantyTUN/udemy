<?php

namespace App\Http\Controllers\Admin;

use App\Model\Quiz;
use App\Model\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function create(){
        return view('exam.assign');
    }

    public function assignExam(Request $request){
        $quiz = (new Quiz)->assignExam($request->all());
        return redirect()->back()->with('message','Exam assign to user successfully!');
    }

    public function userExam(Request $request){
        $quizzes = Quiz::get();
        return view('exam.index',compact('quizzes'));
    }

    public function removeExam(Request $request){
        $userId = $request->get('user_id');
        $quiId = $request->get('quiz_id');
        $quiz = Quiz::find($quiId);
        $result = Result::where('quiz_id',$quiId)->where('user_id',$userId)
                    ->exists();
        if($result){
            return redirect()->back()->with('message', 'This quiz is played by user so it cannot be removed!');
        }else{
            $quiz->users()->detach($userId);
            return redirect()->back()->with('message', 'Exam is now not assigned to that user!');
        
        }
        
    }
}
