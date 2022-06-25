<?php

namespace App\RROTracking\PRRO;

use App\Models\ProRRO as ProRROModel;
use Carbon\Carbon;

class PRROMapper
{
    public function mapModelToEntity(ProRROModel $model): ProRRO
    {
        return (new ProRRO())
            ->setId($model->id)
            ->setDrugStoreId($model->drug_store_id)
            ->setServiceProviderId($model->service_provider_id)
            ->setFiscalKey($model->fiscal_key)
            ->setFiscalCreateDate(Carbon::make($model->fiscal_create_date))
            ->setFiscalEndDate(Carbon::make($model->fiscal_end_date))
            ->setCreatedAt(Carbon::make($model->created_at))
            ->setUpdatedAt(Carbon::make($model->updated_at));
    }

    public function mapEntityToModel(ProRRO $pRRO): ProRROModel
    {
        $model = new ProRROModel();

        $model->drug_store_id = $pRRO->getDrugStoreId();
        $model->service_provider_id = $pRRO->getServiceProviderId();
        $model->fiscal_key = $pRRO->getFiscalKey();
        $model->fiscal_create_date = $pRRO->getFiscalCreateDate();
        $model->fiscal_end_date = $pRRO->getFiscalEndDate();
        $model->created_at = $pRRO->getCreatedAt();
        $model->updated_at = $pRRO->getUpdatedAt();

        if ($pRRO->getId() !== null) {
            $model->id = $pRRO->getId();
        }

        return $model;
    }
}
