<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlanGames extends Model
{
    use HasFactory;
    protected $table='user_workout_plan_games';
    protected $fillable=['user_workout_plan_details_id','pre_workout_plan_games_id','name','sets','rounds','progress'];
    public function exercises()
    {
        return $this->hasMany('App\Models\UserWorkoutPlanExcercise','user_workout_plan_game_id','id');
    }
}
