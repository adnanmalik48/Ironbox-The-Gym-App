<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlanDetails extends Model
{
    use HasFactory;
    protected $table='workout_plan_details';
    protected $fillable=['plan_id','day_title','min_calories','max_calories','day_number','week_number'];

    public function exercises()
    {
        return $this->hasMany('App\Models\WorkoutPlanExercise','game_id','id');
    }
    public function games()
    {
        return $this->hasMany('App\Models\WorkoutPlanGames','workout_plan_details_id','id')->with(['exercises']);
    }
}
