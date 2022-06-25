<?php

namespace App\Http\Resources\RRO;

use App\RROTracking\RRO\RRO;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin RRO
 */
class RROResource extends JsonResource
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
            'service_provider_id' => $this->getServiceProviderId(),
            'drug_store_id' => $this->getDrugStoreId(),
            'name' => $this->getName(),
            'factory_key' => $this->getFactoryKey(),
            'produced_date' => $this->getProducedDate(),
            'price' => $this->getPrice(),
            'fiscal_key' => $this->getFiscalKey(),
            'fiscal_create_date' => $this->getFiscalCreateDate(),
            'fiscal_end_date' => $this->getFiscalEndDate(),
            'status' => $this->getStatus(),
            'create_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}
