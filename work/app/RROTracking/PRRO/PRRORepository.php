<?php

namespace App\RROTracking\PRRO;

use App\Models\ProRRO as ProRROModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class PRRORepository implements PRRORepositoryInterface
{
    public PRROMapper $mapper;

    public function __construct(PRROMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    public function get(int $id): ProRRO
    {
        return $this->mapper->mapModelToEntity(ProRROModel::findOrFail($id));
    }

    public function save(ProRRO $pRRO): ?int
    {
        $model = $this->mapper->mapEntityToModel($pRRO);

        $model->exists = $model->id ?? false;

        $model->save();

        return $model->id;
    }

    public function list(PRROFilter $filter): Collection
    {
        $query = ProRROModel::query();

        $this->buildQuery($query, $filter);

        return $query->get()->map(function (ProRROModel $model) {
            return $this->mapper->mapModelToEntity($model);
        });
    }

    private function buildQuery(Builder $query, PRROFilter $filter)
    {
        $query->when($filter->getDrugStoreId(), function (Builder $q, int $drugStoreId) {
           return $q->where('drug_store_id', $drugStoreId);
        });
        $query->when($filter->getServiceProviderId(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getFiscalKey(), function (Builder $q, string $fiscalKey) {
            return $q->where('fiscal_key', $fiscalKey);
        });
        $query->when($filter->getFiscalEndDate(), function (Builder $q, Carbon $fiscalEndDate) {
            return $q->where('fiscal_end_date', $fiscalEndDate);
        });
        $query->when($filter->getFiscalCreateDate(), function (Builder $q, int $fiscalCreateDate) {
            return $q->where('fiscal_create_date', $fiscalCreateDate);
        });
        $query->when($filter->getCreatedAt(), function (Builder $q, int $createdAt) {
            return $q->where('created_at', $createdAt);
        });
        $query->when($filter->getUpdatedAt(), function (Builder $q, Carbon $updatedAt) {
            return $q->where('updated_at', $updatedAt);
        });

        $query->paginate($filter->getPerPage());
    }
}
