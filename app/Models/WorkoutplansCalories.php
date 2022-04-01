<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutplansCalories extends Model
{
    use HasFactory;
    protected $table='workout_plans_calories';
    protected $fillable=['lower_weight','upper_weight','deduct_cal','add_cal','base_candidate'];
}
