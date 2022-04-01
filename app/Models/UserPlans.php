<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlans extends Model
{
    use HasFactory;
    protected $table='user_bought_plans';
    protected $fillable=['plan_id','user_id','app_catagory'];
}
