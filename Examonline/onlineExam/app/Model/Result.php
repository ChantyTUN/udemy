<?php

namespace App\Model;

use App\Model\Answer;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'quiz_id','answer_id'
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function answer(){
        return $this->belongsTo(Answer::class);
    }
}
