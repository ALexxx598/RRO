<?php

namespace App\RROTracking\Worker;

use App\Models\Worker as WorkerModel;
use Illuminate\Support\Carbon;

class WorkerMapper
{
    public function mapToEntity(WorkerModel $model): Worker
    {
        return (new Worker())
            ->setId($model->id)
            ->setName($model->name)
            ->setPosition($model->position)
            ->setSurname($model->surname)
            ->setDrugStoreId($model->drug_store_id)
            ->setPhone($model->phone)
            ->setCreatedAt(Carbon::make($model->created_at))
            ->setUpdatedAt(Carbon::make($model->updated_at));
    }

    public function mapEntityToModel(Worker $worker): WorkerModel
    {
        $model = new WorkerModel();

        $model->name = $worker->getName();
        $model->surname = $worker->getSurname();
        $model->phone = $worker->getPhone();
        $model->position = $worker->getPosition();
        $model->drug_store_id = $worker->getDrugStoreId();

        if ($worker->getId() !== null) {
            $model->id = $worker->getId();
        }

        return $model;
    }
}
