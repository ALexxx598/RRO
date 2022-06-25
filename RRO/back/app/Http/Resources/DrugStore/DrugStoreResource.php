<?php

namespace App\Http\Resources\DrugStore;

use App\RROTracking\DrugStore\DrugStore;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin DrugStore
 */
class DrugStoreResource extends JsonResource
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
            'legal_entity_id' => $this->getLegalEntityId(),
            'phone' => $this->getPhone(),
            'city' => $this->getCity(),
            'full_address' => $this->getFullAddress(),
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}
