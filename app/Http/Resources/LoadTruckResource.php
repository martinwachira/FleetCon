<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoadTruckResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user'=>$this->LoadTruckBelongsToUser->name,
            'route'=>$this->LoadTruckBelongsToRoute->id,
            'clock_in_id'=>$this->LoadTrucksHasOneClockIn->id,
            'truck_id'=>$this->LoadTrucksBelongsToTruck->id,
            'loading_ticket_no' => $this->loading_ticket_no,
            'loading_tonnage'=> $this->loading_tonnage,
            'loading_img_url'=> $this->loading_img_url,
            'offloading_ticket_no'=> $this->offloading_ticket_no,
            'offloading_tonnage'=> $this->offloading_tonnage,
            'offloading_img_url'=> $this->offloading_img_url,
        ];
    }
}
