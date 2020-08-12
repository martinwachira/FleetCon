<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClockInResourceCollection extends JsonResource
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
            'user'=>$this->ClockInBelongsToUser->name,
            'truck'=> $this->ClockInBelongsToTruck->fleet_number,
            'clock_in_milage'=> $this->clock_in_milage,
            'clock_out_milage'=>$this->clock_out_milage,
        ];
    }
}
