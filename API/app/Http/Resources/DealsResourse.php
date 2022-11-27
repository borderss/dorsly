<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DealsResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'user_id'=>$this->user,
            'point_of_interest' => new PointOfInterestResouce($this->boards),
            'type' => $this->type,
            'prices' => $this->prices,
            'status' => $this->status,
        ];
    }
}