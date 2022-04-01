<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRequests extends Model
{
    use HasFactory;
    protected $table='plan_requests';
    protected $fillable=['trainer_id','trainee_id','status','price','category','created_date','payment_status'];
   
    public function answers()
    {
        return $this->hasMany('App\Models\RequestQuestionsAnswers','plan_request_id','id')->with(['trainer_question']);
    }
    public function trainee()
    {
        return $this->hasMany('App\Models\User','id','trainee_id');
    }
    public function trainer()
    {
        return $this->hasMany('App\Models\User','id','trainer_id');
    }
}
