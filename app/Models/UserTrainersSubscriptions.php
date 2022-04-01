<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrainersSubscriptions extends Model
{
    use HasFactory;
    protected $table='user_trainers_subscriptions';
    protected $fillable=['id','trainer_id','trainee_id','start_date','end_date','sub_price','status','price'];
    
    public function ratings()
    {
     return $this->hasMany('App\Models\UserRatings','id','trainer_id');
    }
  
    public function trainers()
    {
        return $this->hasMany('App\Models\User','id','trainer_id')->with(['ratings']);
    }
    public function trainees()
    {
        return $this->hasMany('App\Models\User','id','trainee_id')->with(['ratings']);
    }
}
