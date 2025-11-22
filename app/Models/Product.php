<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'model',
        'brand',
        'price',
        'description',
        'image',
        'mileage',
        'fuel_type',
        'year',
        'owner_type',
    ];
}
