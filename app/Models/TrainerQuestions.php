<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerQuestions extends Model
{
    use HasFactory;
    protected $table='trainer_questions';
    protected $fillable=['trainer_id','question_id','optional'];

    public function options()
    {
        return $this->hasMany('App\Models\QuestionOptions','question_id','question_id');
    }
    public function questions()
    {
        return $this->hasMany('App\Models\QuestionBank','id','question_id')->with(['options']);
    }
}
