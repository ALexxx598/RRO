<?php

namespace App\RROTracking\LegalEntity;

use App\Models\LegalEntity as LegalEntityModel;

class LegalEntityModelMapper
{
    /**
     * @param LegalEntityModel $model
     * @return LegalEntity
     */
    public function mapModelToEntity(LegalEntityModel $model): LegalEntity
    {
        return (new LegalEntity())
            ->setId($model->id)
            ->setCity($model->city)
            ->setName($model->name)
            ->setOkpo($model->okpo)
            ->setUpdatedAt($model->updated_at)
            ->setCreatedAt($model->created_at);
    }

    public function mapEntityToModel(LegalEntity $legalEntity): LegalEntityModel
    {
        $model = new LegalEntityModel();

        $model->name = $legalEntity->getName();
        $model->city = $legalEntity->getCity();
        $model->okpo = $legalEntity->getOkpo();

        if ($legalEntity->getId() !== null) {
            $model->id = $legalEntity->getId();
        }

        return $model;
    }
}
