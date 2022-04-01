<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanRatings extends Model
{
    use HasFactory;
    protected $table='plan_ratings';
    protected $fillable=['plan_id','one_star','two_star','three_star','four_star','five_star','rating_count','price','rating_count','avg_rating'];
}
