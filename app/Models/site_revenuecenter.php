<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class site_revenuecenter extends Model
{
    protected $table = 'site_revenuecenter';
    protected $fillable = [
        'site_id',
        'revenue_center_id'
    ];

    public function site()
    {
        return $this->belongsTo(site::class);
    }

    public function revenue_center()
    {
        return $this->belongsTo(revenue_center::class);
    }
}
