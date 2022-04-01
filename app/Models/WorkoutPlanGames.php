<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlanGames extends Model
{
    use HasFactory;
    protected $table='workout_plan_game';
    protected $fillable=['workout_plan_details_id','name','sets','rounds'];
    
    public function exercises()
    {
        return $this->hasMany('App\Models\WorkoutPlanExercise','game_id','id');
    }
}
