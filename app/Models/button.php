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
        'URL',
        'active',
        'rc_id'
    ];

    public function revenue_center()
    {
        return $this->belongsToMany(revenue_center::class, 'button_revenuecenter');
    }
}
