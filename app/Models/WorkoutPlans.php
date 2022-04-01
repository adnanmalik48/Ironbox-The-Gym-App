<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlans extends Model
{
    use HasFactory;
    protected $table='workout_plan';
    protected $fillable=['title','description','caution','price','trainer_id','cover_img','cover_video','difficulty_level','duration','category','muscle_type','status'];

    public function trainers()
    {
     return $this->hasMany('App\Models\User','id','trainer_id');
    }
  
    public function ratings()
    {
     return $this->hasMany('App\Models\PlanRatings','plan_id','id');
    }
  
    public function exercises()
    {
        return $this->hasMany('App\Models\WorkoutPlanExercise','game_id','id');
    }
    public function games()
    {
        return $this->hasMany('App\Models\WorkoutPlanGames','workout_plan_details_id','id')->with(['exercises']);
    }
    public function details()
    {
        return $this->hasMany('App\Models\WorkoutPlanDetails','plan_id','id')->with(['games']);
    }
}
