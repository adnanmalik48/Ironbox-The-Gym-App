<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
    use HasFactory;
    protected $table='user_logs';
    protected $fillable=['title','reps','minutes','cal_burn','cal_gain','video_url','description','category_id','created_date','created_by','user_id','meal_id','exercise_id','status'];

}
