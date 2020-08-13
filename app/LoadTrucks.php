<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoadTrucks extends Model
{
    protected $guarded = ['id'];

    public function LoadTruckBelongsToUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function LoadTruckBelongsToRoute()
    {
        return $this->belongsTo('App\Route', 'route_id', 'id');
    }

    public function LoadTrucksHasOneClockIn()
    {
        return $this->hasOne('App\ClockIns', 'id', 'clock_in_id');
    }

    public function LoadTrucksBelongsToTruck()
    {
        return $this->belongsTo('App\Truck', 'truck_id', 'id');
    }
}
