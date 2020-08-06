<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name', 'address', 'distance', 'gps_coordinates', 'product', 'type_of_site',
    ];
    
    public $primaryKey = 'id';

    public function loadingSiteHasManyRoutes()
    {
        return $this->hasMany('App\Route', 'loading_site', 'id');
    }

    public function offloadingSiteHasManyRoutes()
    {
        return $this->hasMany('App\Route', 'off_loading_site', 'id');
    }


}
