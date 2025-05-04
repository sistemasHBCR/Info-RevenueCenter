<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rc_property extends Model
{
    protected $table = 'rc_property';
    protected $fillable = [
        'revenue_center_id',
        'property_id'
    ];

    public function revenuecenter()
    {
        return $this->belongsTo(revenue_center::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
