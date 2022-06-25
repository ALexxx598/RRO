<?php

namespace App\RROTracking\RRO;

use App\Models\RRO as RROModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class RRORepository implements RRORepositoryInterface
{
    private RROModelMapper $modelMapper;

    public function __construct(RROModelMapper $mapper)
    {
        $this->modelMapper = $mapper;
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): RRO
    {
        return $this->modelMapper->mapModelToEntity(RROModel::findOrFail($id));
    }

    /**
     * @inheritDoc
     */
    public function save(RRO $rro): ?int
    {
        $model = $this->modelMapper->mapEntityToModel($rro);

        $model->exists = $model->id ?? false;

        $model->save();

        return $model->id;
    }

    /**
     * @inheritDoc
     */
    public function list(RROListFilter $filter): Collection
    {
        $query = RROModel::query();

        $this->applyToQuery($query, $filter);

        return $query->get()->map(function (RROModel $rroModel) {
           return $this->modelMapper->mapModelToEntity($rroModel);
        });
    }

    private function applyToQuery(Builder $query, RROListFilter $filter)
    {
        $query->when($filter->getServiceProviderId(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getDrugStoreId(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getName(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getFactoryKey(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getProducedDate(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getPrice(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getFiscalKey(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getFiscalCreateDate(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getFiscalEndDate(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getStatus(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getCreatedAt(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });
        $query->when($filter->getUpdatedAt(), function (Builder $q, int $serviceProviderId) {
            return $q->where('service_provider_id', $serviceProviderId);
        });

        $query->paginate($filter->getPerPage());
    }
}
