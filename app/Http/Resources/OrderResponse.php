<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "orderDate" => $this->created_at->diffForHumans(),
            "orderId" => $this->id,
            "name" => $this->user->name,
            "address" => $this->address,
            "phoneNo" => $this->customer->phoneNo,
            "orderDetails" => OrderDetailsResponse::collection($this->pizzas)
        ];
    }
}
