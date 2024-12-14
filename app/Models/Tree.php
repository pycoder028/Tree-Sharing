<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'width',
        'height',
        'location',
        'scientific_name',
        'description',
        'user_id',
        'price',
        'is_approved',
        'is_ecommerce'
    ];

}
