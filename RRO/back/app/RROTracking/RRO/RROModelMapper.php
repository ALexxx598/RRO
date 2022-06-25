<?php

namespace App\RROTracking\RRO;

use App\Models\RRO as RROModel;
use Carbon\Carbon;

class RROModelMapper
{
    public function mapEntityToModel(RRO $rro): RROModel
    {
        $model = new RROModel();

        $model->service_provider_id = $rro->getServiceProviderId();
        $model->drug_store_id = $rro->getDrugStoreId();
        $model->name = $rro->getName();
        $model->factory_key = $rro->getFactoryKey();
        $model->produce_date = $rro->getProducedDate();
        $model->price = $rro->getPrice();
        $model->fiscal_key = $rro->getFiscalKey();
        $model->fiscal_create_date = $rro->getFiscalCreateDate();
        $model->fiscal_end_date = $rro->getFiscalEndDate();
        $model->status = $rro->getStatus();

        if ($rro->getId()) {
            $model->id = $rro->getId();
        }

        return $model;
    }

    public function mapModelToEntity(RROModel $rroModel): RRO
    {
        return (new RRO())
            ->setId($rroModel->id)
            ->setServiceProviderId($rroModel->service_provider_id)
            ->setDrugStoreId($rroModel->drug_store_id)
            ->setName($rroModel->name)
            ->setFactoryKey($rroModel->factory_key)
            ->setProducedDate(Carbon::make($rroModel->produce_date))
            ->setPrice($rroModel->price)
            ->setFiscalKey($rroModel->fiscal_key)
            ->setFiscalCreateDate(Carbon::make($rroModel->fiscal_create_date))
            ->setFiscalEndDate(Carbon::make($rroModel->fiscal_end_date))
            ->setStatus(RROStatusEnum::from($rroModel->status))
            ->setCreatedAt(Carbon::make($rroModel->created_at))
            ->setUpdatedAt(Carbon::make($rroModel->updated_at));
    }
}
