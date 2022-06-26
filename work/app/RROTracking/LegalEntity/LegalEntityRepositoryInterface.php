<?php

namespace App\RROTracking\LegalEntity;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface LegalEntityRepositoryInterface
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
     * @param LegalEntity $legalEntity
     * @return int
     */
    public function save(LegalEntity $legalEntity): int;

    /**
     * @param Builder $query
     * @param LegalEntityFilter $filter
     * @return LengthAwarePaginator
     */
    public function buildQuery(Builder $query, LegalEntityFilter $filter): LengthAwarePaginator;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     * @param string $column
     * @return DistinctColumn
     */
    public function getFilterList(string $column): DistinctColumn;
}
