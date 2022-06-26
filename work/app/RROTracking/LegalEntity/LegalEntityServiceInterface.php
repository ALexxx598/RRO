<?php

namespace App\RROTracking\LegalEntity;

use App\RROTracking\LegalEntity\LegalEntity;
use App\RROTracking\LegalEntity\LegalEntityFilter;
use Illuminate\Support\Collection;

interface LegalEntityServiceInterface
{
    /**
     * @param int $id
     * @return LegalEntity
     */
    public function get(int $id): LegalEntity;

    /**
     * @param LegalEntityFilter $filter
     * @return LegalEntityCollection
     */
    public function list(LegalEntityFilter $filter): LegalEntityCollection;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     * @param string $column
     * @return DistinctColumn
     */
    public function filterList(string $column): DistinctColumn;
}
