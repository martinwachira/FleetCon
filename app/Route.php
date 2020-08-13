<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'loading_site', 'off_loading_site', 'distance', 'turn_around_time', 'possible_trips_per_month', 'rands', 
        'contract_quantity_per_month',
    ];
    
    public $primaryKey = 'id';

    public function loadingSiteBelongsToSite()
    {
        return $this->belongsTo('App\Site', 'loading_site', 'id');
    }

    public function offloadingSiteBelongsToSite()
    {
        return $this->belongsTo('App\Site', 'off_loading_site', 'id');
    }

    public function RouteHasManyLoadTruck()
    {
        return $this->hasMany('App\LoadTrucks', 'route_id', 'id');
    }

}
