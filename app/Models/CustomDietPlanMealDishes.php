<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDietPlanMealDishes extends Model
{
    use HasFactory;
    protected $table='custom_diet_plan_meal_dish';
    protected $fillable=['name','meal_id','quantity','description','weight','image','protein','calories','fat','carbohydrates','caution','status'];
}
