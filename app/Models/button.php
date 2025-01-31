<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class button extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_es',
        'file',
        'file_es',
        'description',
        'description_es',
        'rc_id'
    ];

    public function revenue_centers()
    {
        return $this->belongsToMany(revenue_center::class);
    }
}
