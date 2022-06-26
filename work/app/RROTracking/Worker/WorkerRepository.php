<?php

namespace App\RROTracking\Worker;

use App\Models\Worker as WorkerModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class WorkerRepository implements WorkerRepositoryInterface
{
    private WorkerMapper $workerMapper;

    public function __construct(WorkerMapper $workerMapper)
    {
        $this->workerMapper = $workerMapper;
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): Worker
    {
        return $this->workerMapper->mapToEntity(WorkerModel::findOrFail($id));
    }

    /**
     * @inheritDoc
     */
    public function list(WorkerListFilter $filter): Collection
    {
        $query = WorkerModel::query();

        $this->applyToQuery($filter, $query);

        return $query->get()->map(function (WorkerModel $workerModel) {
            return $this->workerMapper->mapToEntity($workerModel);
        });
    }

    private function applyToQuery(WorkerListFilter $filter, Builder $query)
    {
        $query->when($filter->getPhone(), function (Builder $q, string $phone) {
            return $q->where('phone', $phone);
        });

        $query->when($filter->getName(), function (Builder $q, string $name) {
            return $q->where('name', $name);
        });

        $query->when($filter->getPosition(), function (Builder $q, string $position) {
            return $q->where('position', $position);
        });

        $query->when($filter->getDrugStoreId(), function (Builder $q, string $drugStoreId) {
            return $q->where('drug_store_id', $drugStoreId);
        });

        $query->when($filter->getCreatedAt(), function (Builder $q, Carbon $createdAt) {
            return $q->where('created_at', '=', $createdAt);
        });

        $query->when($filter->getUpdatedAt(), function (Builder $q, Carbon $updatedAt) {
            return $q->where('updated_at', '=', $updatedAt);
        });

        $query->paginate($filter->getPerPage());
    }

    /**
     * @inheritDoc
     */
    public function save(Worker $drugStore): int
    {
        $model = $this->workerMapper->mapEntityToModel($drugStore);

        $model->exists = $model->id ?? false;
        $model->save();

        return $model->id;
    }
}
