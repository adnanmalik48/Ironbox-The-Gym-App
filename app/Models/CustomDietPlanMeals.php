<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDietPlanMeals extends Model
{
    use HasFactory;
    protected $table='custom_diet_plan_meal';
    protected $fillable=['title','detail_id','total_protein','total_calories','total_carbohydrates','total_fat','protein_gain','fat_gain','calories_gain','carbohydrates_gain','status','progress','time'];

    public function dishes()
    {
     return $this->hasMany('App\Models\CustomDietPlanMealDishes','meal_id','id');
    }
}
