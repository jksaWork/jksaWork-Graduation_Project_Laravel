<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'area_id' => $this->area_id,
            'type_id' => $this->type_id,
            'client_id' => $this->client_id,
            'price' => $this->price,
            'owner_id' => $this->owner_id,
            'title' => $this->title,
            'short_desc' => $this->short_desc,
            'long_desc' => $this->long_desc,
            'service_id' => $this->service_id,
            'lat' => $this->lat,
            'long' => $this->long,
            'main_image' => $this->main_image,
            'status'=> $this->status,
            'location'=> $this->location,
            'is_avaliable' => $this->is_avaliable,
            'area' => $this->Area,
            'owner' => $this->Owner,
            'client' => $this->Client,
            'type' => $this->Type,
            'service' =>$this->Service,
            'agent' =>$this->Agent,
            'images' => $this->attachments,
            'favorate_count' => $this->favorate_offers_count,
            'is_favorate' => !$this->favorate_offers_count ?0: (!auth()->check() ? 0: auth()->user()->isFavorate($this->id)),
        ];
    }
}
