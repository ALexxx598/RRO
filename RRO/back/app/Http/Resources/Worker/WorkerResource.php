<?php

namespace App\Http\Resources\Worker;

use App\RROTracking\Worker\Worker;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Worker
 */
class WorkerResource extends JsonResource
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
            'drug_store_id' => $this->getDrugStoreId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'phone' => $this->getPhone(),
            'position' => $this->getPosition(),
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}
