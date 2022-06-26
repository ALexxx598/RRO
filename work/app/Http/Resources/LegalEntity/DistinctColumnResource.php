<?php

namespace App\Http\Resources\LegalEntity;

use App\RROTracking\LegalEntity\DistinctColumn;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin DistinctColumn
 */
class DistinctColumnResource extends JsonResource
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
            'column' => $this->getColumn(),
            'values' => $this->getValues()->toArray(),
        ];
    }
}
