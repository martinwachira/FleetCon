<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelPurchases extends Model
{
    protected $guarded = ['id'];

    public function FuelPurchaseBelongsToTruck()
    {
        return $this->belongsTo('App\Truck', 'truck_id', 'id');
    }
    public function FuelPurchaseBelongsToUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function FuelPurchaseBelongsToClockins()
    {
        return $this->belongsTo('App\ClockIns', 'clock_in_id', 'id');
    }
}
