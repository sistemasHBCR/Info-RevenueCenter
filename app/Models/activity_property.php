<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activity_property extends Model
{
    protected $table = 'activity_property';
    protected $fillable = [
        'activity_id',
        'property_id'
    ];

    public function activity()
    {
        return $this->belongsTo(activity::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
