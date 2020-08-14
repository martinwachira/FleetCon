<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'unit_of_measure', 'symbol',
    ];
    
    public $primaryKey = 'id';
}
