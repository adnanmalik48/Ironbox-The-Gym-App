<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDietPlanDay extends Model
{
    use HasFactory;
    protected $table='custom_diet_plan_day';
    protected $fillable=['plan_id','week_number','day_number','total_meals','progress','total_protein','total_fat','total_calories','total_carbohydrates','protein_gain','fat_gain','calories_gain','carbohydrates_gain'];

    public function meals()
    {
     return $this->hasMany('App\Models\CustomDietPlanMeals','detail_id','id')->with(['dishes']);;
    }
}
