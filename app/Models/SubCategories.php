<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    protected $table='sub_categories';
    protected $fillable=['app_categories_id	','name','status'];

    public function categories()
    {
     return $this->hasMany('App\Models\Categories','id','app_categories_id');
    }
}
