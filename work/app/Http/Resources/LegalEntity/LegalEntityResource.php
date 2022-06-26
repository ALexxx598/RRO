<?php

namespace App\Http\Resources\LegalEntity;

use App\RROTracking\LegalEntity\LegalEntity;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin LegalEntity
 */
class LegalEntityResource extends JsonResource
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
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city' => $this->getCity(),
            'okpo' => $this->getOkpo(),
            'created_at' => $this->getCreatedAt()->format('Y-m-d h:i'),
            'updated_at' => $this->getUpdatedAt()?->format('Y-m-d h:i'),
        ];
    }
}
