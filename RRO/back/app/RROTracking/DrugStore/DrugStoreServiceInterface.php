<?php

namespace App\RROTracking\DrugStore;

use DrugStoreCreatePayload;
use DrugStoreUpdatePayload;
use Illuminate\Support\Collection;

interface DrugStoreServiceInterface
{
    /**
     * @param int $id
     * @return DrugStore
     */
    public function get(int $id);

    /**
     * @param DrugStoreListFilter $filter
     * @return DrugStoreCollection
     */
    public function list(DrugStoreListFilter $filter): DrugStoreCollection;

    /**
     * @param DrugStoreCreatePayload $payload
     * @return DrugStore
     */
    public function create(DrugStoreCreatePayload $payload): DrugStore;

    /**
     * @param DrugStoreUpdatePayload $payload
     * @return DrugStore
     */
    public function update(DrugStoreUpdatePayload $payload): DrugStore;
}
