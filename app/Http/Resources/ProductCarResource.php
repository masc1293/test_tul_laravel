<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CartResource;

class ProductCarResource extends JsonResource
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
            'id'         => $this->id,
            'product_id' => ProductResource::collection($this->productCart),
            'cart_id'    => CartResource::collection($this->state),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
