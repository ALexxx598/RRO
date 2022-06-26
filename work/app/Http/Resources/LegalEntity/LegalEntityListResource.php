<?php

namespace App\Http\Resources\LegalEntity;

use App\RROTracking\LegalEntity\LegalEntity;
use App\RROTracking\LegalEntity\LegalEntityCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin LegalEntityCollection
 */
class LegalEntityListResource extends JsonResource
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
            'data' => LegalEntityResource::collection($this->getItems()),
        ];
    }
}
