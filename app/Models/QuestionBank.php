<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    use HasFactory;
    protected $table='question_bank';
    protected $fillable=['statement','status','created_by','category'];

  
    public function users()
    {
        return $this->hasMany('App\Models\User','id','created_by');
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\QuestionOptions','question_id','id');
    }
    
}
