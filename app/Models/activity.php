<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;
    
    protected $table = 'activities';
    protected $fillable = [
        'name',
        'image',
        'description',
        'description_es'
    ];
    
    public function property(){
        return $this->belongsToMany(property::class, 'activity_property');
    }
}
