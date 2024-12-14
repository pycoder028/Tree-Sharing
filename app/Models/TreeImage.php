<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreeImage extends Model
{
    use HasFactory;

    public $fillable = [
        'tree_id',
        'image'
    ];

}
