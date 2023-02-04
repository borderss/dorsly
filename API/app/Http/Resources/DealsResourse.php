<?php

namespace App\Http\Resources;

use App\Models\User;
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
            'point_of_interest_id' => $this->pointOfInterest->id,
            'reservation' => [
                'id' => $this->reservation->id,
                'date' => $this->reservation->date,
                'number_of_people' => $this->reservation->number_of_people,
            ],
            'pre_purchase' => [
                'id' => $this->prePurchase->id,
                'products' => json_decode($this->prePurchase->products),
                'total_price' => $this->prePurchase->total_price,
                'status' => $this->prePurchase->status,
                'payment_status' => $this->prePurchase->payment_status,
            ],
            'user_id'=> $this->user->id,
            'status' => $this->status,
        ];
    }
}
