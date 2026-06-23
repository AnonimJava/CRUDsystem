<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'tracking_number',
        'sender',
        'receiver',
        'origin',
        'destination',
        'status'
    ];
}
