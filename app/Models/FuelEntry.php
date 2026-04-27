<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelEntry extends Model
{
    protected $fillable = [
        'vehicle_id',
        'date',
        'price_per_liter',
        'liters_filled',
        'distance_traveled',
        'gas_station',
    ];

    protected $casts = [
        'date' => 'date',
        'price_per_liter' => 'float',
        'liters_filled' => 'float',
        'distance_traveled' => 'float',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
