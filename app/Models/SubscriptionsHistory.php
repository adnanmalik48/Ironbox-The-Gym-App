<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionsHistory extends Model
{
    use HasFactory;
    protected $table='user_subscriptions_history';
    protected $fillable=['trainer_id','trainee_id','start_date','end_date','sub_price','unsub_date'];
    
    // public function trainees()
    // {
    //     return $this->hasMany('App\Models\User','id','trainee_id');
    // }
  
    public function trainers()
    {
        return $this->hasMany('App\Models\User','id','trainer_id');
    }
     
}
