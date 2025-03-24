<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class more_property extends Model
{
    protected $table = 'more_property';
    protected $fillable = [
        'more_id',
        'property_id'
    ];

    public function more()
    {
        return $this->belongsTo(more::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
