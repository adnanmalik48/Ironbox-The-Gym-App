<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategories;

class ChildCategories extends Model
{
    use HasFactory;
    protected $table='child_categories';
    protected $fillable=['sub_categories_id	','name','status'];
   
    public function subcategories()
    {
        return $this->hasMany('App\Models\SubCategories','id','sub_categories_id')->with(['categories']);
    }
}
