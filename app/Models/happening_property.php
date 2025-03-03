<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class happening_property extends Model
{
    protected $table = 'happening_property';
    protected $fillable = [
        'happening_id',
        'property_id'
    ];

    public function happening()
    {
        return $this->belongsTo(happening::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
