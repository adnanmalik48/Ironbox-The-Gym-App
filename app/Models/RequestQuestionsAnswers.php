<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuestionsAnswers extends Model
{
    use HasFactory;
    protected $table='request_questions_answers';
    protected $fillable=['plan_request_id','trainer_question_id','answer_statement'];

  
    public function trainer_question()
    {
        return $this->hasMany('App\Models\TrainerQuestions','id','trainer_question_id')->with(['questions']);
    }
}
