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
}
