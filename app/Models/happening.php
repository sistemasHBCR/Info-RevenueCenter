<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class happening extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'schedule_day_start',
        'schedule_day_end',
        'schedule_spe_day',
        'schedule_hour_start',
        'schedule_hour_end',
        'description',
        'description_es',
        'active',
        'rc_name'
    ];

    public function revenuecenter(){
        // Relacion directa de Tablas, sin tabla intermedia
        return $this->belongsTo(revenue_center::class, 'rc_name', 'id', 'revenue_centers');
    }
}
