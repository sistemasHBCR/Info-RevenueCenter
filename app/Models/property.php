<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'logo',
        'background',
        'title',
        'description'
    ];
}
