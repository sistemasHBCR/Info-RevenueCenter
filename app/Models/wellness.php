<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wellness extends Model
{
    use HasFactory;
    
    protected $table = 'wellness';
    protected $fillable = [
        'name',
        'image',
        'description',
        'description_es'
    ];
    
    public function property(){
        return $this->belongsToMany(property::class, 'wellness_property');
    }
}
