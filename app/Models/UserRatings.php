<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRatings extends Model
{
    use HasFactory;
    protected $table='user_ratings';
    protected $fillable=['user_id','one_star','two_star','three_star','four_star','five_star','rating_count','price','rating_count','avg_rating'];
}
