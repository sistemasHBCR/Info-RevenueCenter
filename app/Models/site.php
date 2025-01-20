<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'schedule_day',
        'schedule_hour',
        'description',
        'description_es',
        'rc_id'
    ];

    public function revenue_center()
    {
        return $this->belongsToMany(revenue_center::class);
    }
}
