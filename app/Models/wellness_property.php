<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wellness_property extends Model
{
    protected $table = 'wellness_property';
    protected $fillable = [
        'wellness_id',
        'property_id'
    ];

    public function wellnes()
    {
        return $this->belongsTo(wellness::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
