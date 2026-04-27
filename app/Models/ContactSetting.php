<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'whatsapp',
        'instagram',
        'website',
        'maps_url',
        'open_hours',
    ];
}
