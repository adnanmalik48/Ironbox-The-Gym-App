<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodLibrary extends Model
{
    use HasFactory;
    protected $table='food_library';
    protected $fillable=['name','weight','added_by','category_id','image','description','caution','protein_gain','fat_gain','calories_gain','carbohydrates_gain'];
  
    public function food_category()
    {
     return $this->hasMany('App\Models\FoodCategories','id','category_id');
    }
}
