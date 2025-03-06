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

    public function happening(){
        return $this->belongsToMany(happening::class, 'happening_property');
    }

    public function wellness(){
        return $this->belongsToMany(wellness::class, 'wellness_property');
    }
}
