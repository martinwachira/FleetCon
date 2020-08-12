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
}
