<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlanDetails extends Model
{
    use HasFactory;
    protected $table='user_workout_plan_details';
    protected $fillable=['user_workout_plan_id','pre_workout_plan_details_id','day_title','min_calories','max_calories','day_number','week_number','avg_cal','cal_burn','progress'];
    public function exercises()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanExcercise','user_workout_plan_game_id','id');
    }
    public function games()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanGames','user_workout_plan_details_id','id')->with(['exercises']);
    }
}
