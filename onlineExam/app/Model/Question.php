<?php

namespace App\Model;

use App\Model\Quiz;
use App\Model\Answer;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'quiz_id',];
    private $limit=10;
    private $order = 'DESC';

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function storeQuestion($data){
        $data['quiz_id'] = $data['quiz'];
        return Question::create($data);
    }

    public function getQuestions(){
        return Question::orderBy('created_at',$this->order)
                        ->with('quiz')->paginate($this->limit);
    }

    public function getQuestionById($id){
        return Question::find($id);
    }

    public function findQuestion($id){
        return Question::find($id);
    }
}
