<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDietPlans extends Model
{
    use HasFactory;
    protected $table='custom_diet_plan';
    protected $fillable=['title','difficulty_level','description','duration','goal','caution','request_id','trainee_id','trainer_id','cover_image','version','progress','status','total_protein','total_fat','total_calories','total_carbohydrates','protein_gain','fat_gain','calories_gain','carbohydrates_gain'];

    public function trainers()
    {
     return $this->hasMany('App\Models\User','id','trainer_id');
    }
  
    public function trainees()
    {
     return $this->hasMany('App\Models\User','id','trainee_id');
    }
    public function details()
    {
     return $this->hasMany('App\Models\CustomDietPlanDay','plan_id','id')->with(['meals']);;
    }
}
