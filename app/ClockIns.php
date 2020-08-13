<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClockIns extends Model
{
    protected $guarded = ['id'];

    public function ClockInBelongsToTruck()
    {
        return $this->belongsTo('App\Truck', 'truck_id', 'id');
    }
    public function ClockInBelongsToUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function ClockInsHasOneLoadTruck()
    {
        return $this->hasOne('App\LoadTrucks', 'clock_in_id', 'id');
    }
}
