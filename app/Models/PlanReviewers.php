<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanReviewers extends Model
{
    use HasFactory;
    protected $table='plan_reviews';
    protected $fillable=['message','user_id','plan_id','rating'];
    public function plan()
    {
     return $this->hasMany('App\Models\WorkoutPlans','id','plan_id');
    }
    public function user()
    {
     return $this->hasMany('App\Models\User','id','user_id');
    }
}
