<?php

namespace App\RROTracking\DrugStore;

use App\Models\DrugStore as DrugStoreModel;

class DrugStoreMapper
{
    public function mapModelToEntity(DrugStoreModel $model): DrugStore
    {
        return (new DrugStore())
            ->setId($model->id)
            ->setLegalEntityId($model->legal_entity_id)
            ->setPhone($model->phone)
            ->setFullAddress($model->full_address)
            ->setCity($model->city)
            ->setCreatedAt($model->created_at)
            ->setUpdatedAt($model->updated_at);
    }

    public function mapEntityToModel(DrugStore $drugStore): DrugStoreModel
    {
        $model = new DrugStoreModel();

        $model->phone = $drugStore->getPhone();
        $model->full_address = $drugStore->getFullAddress();
        $model->city = $drugStore->getCity();
        $model->legal_entity_id = $drugStore->getLegalEntityId();

        if ($drugStore->getId() !== null) {
            $model->id = $drugStore->getId();
        }

        return $model;
    }
}
