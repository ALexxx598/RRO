<?php

namespace App\RROTracking\PRRO;

use Illuminate\Support\Collection;

interface PRRORepositoryInterface
{
    /**
     * @param int $id
     * @return ProRRO
     */
    public function get(int $id): ProRRO;

    /**
     * @param ProRRO $pRRO
     * @return int|null
     */
    public function save(ProRRO $pRRO): ?int;

    /**
     * @param PRROFilter $filter
     * @return Collection<ProRRO>
     */
    public function list(PRROFilter $filter): Collection;
}
