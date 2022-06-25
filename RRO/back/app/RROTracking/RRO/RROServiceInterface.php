<?php

namespace App\RROTracking\RRO;

use Illuminate\Support\Collection;
use RROCreatePayload;
use RROUpdatePayload;

interface RROServiceInterface
{
    /**
     * @param int $id
     * @return RRO
     */
    public function get(int $id): RRO;

    /**
     * @param RROListFilter $filter
     * @return Collection<RRO>
     */
    public function list(RROListFilter $filter): Collection;

    /**
     * @param RROCreatePayload $payload
     * @return RRO
     */
    public function create(RROCreatePayload $payload): RRO;

    /**
     * @param RROUpdatePayload $payload
     * @return RRO
     */
    public function update(RROUpdatePayload $payload): RRO;
}
