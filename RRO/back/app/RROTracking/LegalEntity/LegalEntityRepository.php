<?php

namespace App\RROTracking\LegalEntity;

use App\Models\LegalEntity as LegalEntityModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class LegalEntityRepository implements LegalEntityRepositoryInterface
{
    public LegalEntityModelMapper $mapper;

    /**
     * @param LegalEntityModelMapper $mapper
     */
    public function __construct(LegalEntityModelMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): LegalEntity
    {
        return $this->mapper->mapModelToEntity(LegalEntityModel::findOrFail($id));
    }

    /**
     * @inheritDoc
     */
    public function list(LegalEntityFilter $filter): LegalEntityCollection
    {
        $query = LegalEntityModel::query();

        $paginator = $this->buildQuery($query, $filter);

        return (new LegalEntityCollection())
            ->setPerPage($paginator->perPage())
            ->setCurrentPage($paginator->currentPage())
            ->setItems(collect($paginator->items())->map(function (LegalEntityModel $model): LegalEntity {
                return $this->mapper->mapModelToEntity($model);
            }));
    }

    /**
     * @inheritDoc
     */
    public function save(LegalEntity $legalEntity): int
    {
        $model = $this->mapper->mapEntityToModel($legalEntity);

        $model->exists = $model->id ?? false;
        $model->save();

        return $model->id;
    }

    /**
     * @inheritDoc
     */
    public function buildQuery(Builder $query, LegalEntityFilter $filter): LengthAwarePaginator
    {
//        $query->when($filter->getNames(), function (Builder $q, string $name) {
//            return $q->where('name', 'in', $name);
//        });

        $query->when($filter->getOkpo(), function (Builder $q, int $okpo) {
            return $q->where('okpo', '=', $okpo);
        });
//
//        $query->when($filter->getCities(), function (Builder $q, string $city) {
//            return $q->where('city', 'in', $city);
//        });

        $query->when($filter->getCreatedAt(), function (Builder $q, Carbon $createdAt) {
            return $q->where('created_at', '=', $createdAt);
        });

        $query->when($filter->getUpdatedAt(), function (Builder $q, Carbon $updatedAt) {
            return $q->where('updated_at', '=', $updatedAt);
        });

        return $query->paginate($filter->getPerPage());
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return LegalEntityModel::destroy($id);
    }

    /**
     * @param string $column
     * @return DistinctColumn
     */
    public function getFilterList(string $column): DistinctColumn
    {
        return DistinctColumn::make(
            LegalEntityModel::query()->select($column)->distinct()->get()->map(
                function (LegalEntityModel $model) use ($column): string {
                    return $model->{$column};
                }
            ),
            $column
        );
    }
}
