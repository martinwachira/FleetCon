<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name', 'id_number', 'phone_number', 'driver_salary', 'load_bonus',
    ];
    
    public $primaryKey = 'id';
}
