<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'schedule_day_start',
        'schedule_day_end',
        'schedule_hour_start',
        'schedule_hour_end',
        'description',
        'description_es',
        'rc_id'
    ];

    public function revenue_center()
    {
        return $this->belongsToMany(revenue_center::class, 'site_revenuecenter');
    }
}
