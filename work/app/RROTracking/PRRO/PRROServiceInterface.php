<?php

namespace App\RROTracking\PRRO;

use Illuminate\Support\Collection;
use PRROCreatePayload;
use PRROUpdatePayload;

interface PRROServiceInterface
{
    /**
     * @param int $id
     * @return ProRRO
     */
    public function get(int $id): ProRRO;

    /**
     * @param PRROFilter $filter
     * @return Collection<ProRRO>
     */
    public function list(PRROFilter $filter): Collection;

    /**
     * @param PRROCreatePayload $payload
     * @return ProRRO
     */
    public function create(PRROCreatePayload $payload): ProRRO;

    /**
     * @param PRROUpdatePayload $payload
     * @return ProRRO
     */
    public function update(PRROUpdatePayload $payload): ProRRO;
}
