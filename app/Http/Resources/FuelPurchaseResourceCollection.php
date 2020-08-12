<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FuelPurchaseResourceCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'truck'=>$this->FuelPurchaseBelongsToTruck->fleet_number,
            'clock_in'=>$this->FuelPurchaseBelongsToClockins->id,
            'user'=>$this->FuelPurchaseBelongsToUser->name,
            'mileage' => $this->mileage,
            'litres_purchased' => $this->litres_purchased,            
        ];
    }
}
