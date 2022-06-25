<?php

namespace App\Http\Resources\PRRO;

use App\RROTracking\PRRO\ProRRO;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @mixin ProRRO
 */
class PRROListResource extends JsonResource
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

        ];
    }
}
