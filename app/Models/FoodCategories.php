<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategories extends Model
{
    use HasFactory;
    protected $table='food_category';
    protected $fillable=['name'];
}
