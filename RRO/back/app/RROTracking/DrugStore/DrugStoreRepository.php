<?php

namespace App\RROTracking\DrugStore;

use App\Models\DrugStore as DrugStoreModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DrugStoreRepository implements DrugStoreRepositoryInterface
{
    public DrugStoreMapper $mapper;

    /**
     * @param DrugStoreMapper $mapper
     */
    public function __construct(DrugStoreMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    public function get(int $id): DrugStore
    {
        return $this->mapper->mapModelToEntity(DrugStoreModel::findOrFail($id));
    }

    /**
     * @inheritDoc
     */
    public function list(DrugStoreListFilter $filter): DrugStoreCollection
    {
        $query = DrugStoreModel::query();

        $paginator = $this->buildQuery(DrugStoreModel::query(), $filter);

        return (new DrugStoreCollection())
            ->setPerPage($paginator->perPage())
            ->setCurrentPage($paginator->currentPage())
            ->setItems(collect($paginator->items())->map(function (DrugStoreModel $model): DrugStore {
                return $this->mapper->mapModelToEntity($model);
            }));
    }

    /**
     * @param Builder $query
     * @param DrugStoreListFilter $filter
     * @return LengthAwarePaginator
     */
    private function buildQuery(Builder $query, DrugStoreListFilter $filter): LengthAwarePaginator
    {
        $query->when($filter->getCity(), function (Builder $q, DrugStoreListFilter $city) {
            return $q->where('city', $city);
        });

        $query->when($filter->getPhone(), function (Builder $q, DrugStoreListFilter $phone) {
            return $q->where('phone', $phone);
        });

        $query->when($filter->getLegalEntityId(), function (Builder $q, DrugStoreListFilter $legalEntity) {
            return $q->where('legal_entity_id', $legalEntity);
        });

        $query->when($filter->getFullAddress(), function (Builder $q, DrugStoreListFilter $fullAddress) {
            return $q->where('full_address', $fullAddress);
        });

        $query->when($filter->getFullAddress(), function (Builder $q, DrugStoreListFilter $createdAt) {
            return $q->where('created_at', $createdAt);
        });

        $query->when($filter->getFullAddress(), function (Builder $q, DrugStoreListFilter $updatedAt) {
            return $q->where('updated_at', $updatedAt);
        });

        return $query->paginate($filter->getPerPage());
    }

    /**
     * @inheritDoc
     */
    public function save(DrugStore $drugStore): int
    {
        $model = $this->mapper->mapEntityToModel($drugStore);

        $model->exists = $model->id ?? false;
        $model->save();

        return $model->id;
    }
}
