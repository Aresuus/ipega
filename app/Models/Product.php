<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['product', 'name', 'description', 'color', 'properties'];
}
