<?php

namespace App\RROTracking\DrugStore;

use Illuminate\Support\Collection;

interface DrugStoreRepositoryInterface
{
    /**
     * @param int $id
     * @return DrugStore
     */
    public function get(int $id): DrugStore;

    /**
     * @param DrugStoreListFilter $filter
     * @return DrugStoreCollection
     */
    public function list(DrugStoreListFilter $filter): DrugStoreCollection;

    /**
     * @param DrugStore $drugStore
     * @return int
     */
    public function save(DrugStore $drugStore): int;
}
