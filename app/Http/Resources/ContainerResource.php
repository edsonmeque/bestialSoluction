<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContainerResource extends JsonResource
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
           'id'=>$this->id,
           'number'=>$this->number,
           'tags'=>$this->tags,
           'lat'=>$this->lat,
           'lng'=>$this->lng,
           'updated'=>$this->created,
        ];
    }
}
