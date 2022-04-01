<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseUrls extends Model
{
    use HasFactory;
    protected $table='base_urls';
    protected $fillable=['base_url','api_base_url','storage_base_url'];
}
