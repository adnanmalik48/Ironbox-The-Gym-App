<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlanExercise extends Model
{
    use HasFactory;
    protected $table='workout_plan_exercise';
    protected $fillable=['game_id','name','reps','duration','video_url','description'];
}
