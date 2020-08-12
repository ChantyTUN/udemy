<?php

namespace App\Http\Controllers;

use App\Model\Quiz;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin==1){
            return redirect('/');
        }
        $authUser = auth()->user()->id;
        $assignedQuizId = [];
        $user = DB::table('quiz_user')->where('user_id',$authUser)
                ->get();
        foreach($user as $u){
                array_push($assignedQuizId,$u->quiz_id);
        }
        $quizzes = Quiz::WhereIn('id',$assignedQuizId)->get();


        
        return view('home');
    }
}
