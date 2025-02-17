<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class button_revenuecenter extends Model
{
    protected $table = 'button_revenuecenter';
    protected $fillable = [
        'button_id',
        'revenue_center_id'
    ];

    public function button()
    {
        return $this->belongsTo(button::class);
    }

    public function revenue_center()
    {
        return $this->belongsTo(revenue_center::class);
    }
}
