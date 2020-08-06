<?php

namespace App\Model;

use App\Model\Quiz;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'name', 'description', 'minutes',
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function storeQuiz($data){
        return Quiz::create($data);
    }

    public function allQuiz(){
        return Quiz::all();
    }

    public function getQuizById($id){
        return Quiz::find($id);
    }

    public function updateQuiz($data,$id){
        return Quiz::find($id)->update($data);
    }

    public function deleteQuiz($id){
        return Quiz::find($id)->delete();
    }
}
