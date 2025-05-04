<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class button_wellness extends Model
{
    protected $table = 'button_wellness';
    protected $fillable = [
        'button_id',
        'wellness_id'
    ];

    public function button()
    {
        return $this->belongsTo(button::class);
    }

    public function wellness()
    {
        return $this->belongsTo(wellness::class);
    }
}
