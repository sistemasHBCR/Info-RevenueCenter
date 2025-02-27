<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hacienda_button extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'name_es',
        'file',
        'file_es',
        'description',
        'rc_id'
    ];
}
