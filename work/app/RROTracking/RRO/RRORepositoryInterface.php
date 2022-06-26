<?php

namespace App\RROTracking\RRO;

use Illuminate\Support\Collection;

interface RRORepositoryInterface
{

    /**
     * @param int $getId
     * @return RRO
     */
    public function get(int $getId): RRO;

    /**
     * @param RRO $rro
     * @return int|null
     */
    public function save(RRO $rro): ?int;

    /**
     * @param RROListFilter $filter
     * @return Collection<RROListFilter>
     */
    public function list(RROListFilter $filter): Collection;
}
