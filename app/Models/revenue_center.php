<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revenue_center extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsToMany(property::class, 'rc_revenuecenter');
    }

    public function happening()
    {
        return $this->belongsToMany(happening::class);
    }

    public function button()
    {
        return $this->belongsToMany(button::class, 'button_revenuecenter');
    }

    public function site()
    {
        return $this->belongsToMany(site::class, 'site_revenuecenter');
    }
}
