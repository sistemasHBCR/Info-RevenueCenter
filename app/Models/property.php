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

    public function revenuecenter(){
        return $this->belongsToMany(revenue_center::class, 'rc_property');
    }

    public function happening(){
        return $this->belongsToMany(happening::class, 'happening_property');
    }

    public function wellness(){
        return $this->belongsToMany(wellness::class, 'wellness_property');
    }

    public function activity(){
        return $this->belongsToMany(activity::class, 'activity_property');
    }

    public function more(){
        return $this->belongsToMany(more::class, 'more_property');
    }
}
