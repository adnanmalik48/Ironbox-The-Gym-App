<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlans extends Model
{
    use HasFactory;
    protected $table='user_workout_plans';
    protected $fillable=['user_id','plan_id','title','description','caution','price','trainer_id','cover_img','cover_video','difficulty_level','duration','category_id','muscle_type','progress','version'];

    public function exercises()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanExcercise','user_workout_plan_game_id','id');
    }
    public function games()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanGames','user_workout_plan_details_id','id')->with(['exercises']);
    }
    public function details()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanDetails','user_workout_plan_id','id')->with(['games']);
    }
}
