<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlanExcercise extends Model
{
    use HasFactory;
    protected $table='user_workout_plan_exercises';
    protected $fillable=['user_workout_plan_game_id','name','reps','duration','video_url','description','status'];
}
