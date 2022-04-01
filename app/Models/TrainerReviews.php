<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerReviews extends Model
{
    use HasFactory;
    protected $table='user_reviews';
    protected $fillable=['message','review_for','review_by'];

    public function user()
    {
     return $this->hasMany('App\Models\User','id','review_by');
    }

    
  
}
