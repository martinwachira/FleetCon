<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    //
    protected $guarded = ['id'];

    public function TruckHaManyClockIns()
    {
        return $this->hasMany('App\ClockIns', 'truck_id', 'id');
    }

    public function TruckHasManyLoadTrucks()
    {
        return $this->hasMany('App\LoadTrucks', 'truck_id', 'id');
    }
}
