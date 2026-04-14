<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelEntry extends Model
{
    protected $fillable = [
        'date',
        'price_per_liter',
        'liters_filled',
        'amount_paid',
        'distance_traveled',
        'odometer',
        'gas_station',
    ];

    protected $casts = [
        'date' => 'date',
        'price_per_liter' => 'float',
        'liters_filled' => 'float',
        'amount_paid' => 'float',
        'distance_traveled' => 'float',
        'odometer' => 'float',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
