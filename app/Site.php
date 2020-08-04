<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name', 'address', 'distance', 'gps_coordinates', 'product', 'type_of_site',
    ];
    
    public $primaryKey = 'id';
}
