<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contacts extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $fillable=['user_id','contact_id'];

    public function ratings()
    {
     return $this->hasMany('App\Models\UserRatings','id','trainer_id');
    }
  
}
