<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hacienda_revenue_center extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'description_es',
        'image_1',
        'image_2',
        'image_3',
        'active',
        'property_id'
    ];
}
