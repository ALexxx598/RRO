<?php

namespace App\RROTracking\RRO;

use RROUpdatePayload;

class RROPayloadToAggregateMapper
{
    public function mapPayloadToRRO(RRO $rro, RROUpdatePayload $payload)
    {
        if ($payload->getServiceProviderId()) {
            $rro->setServiceProviderId($payload->getServiceProviderId());
        }
        if ($payload->getDrugStoreId()) {
            $rro->setDrugStoreId($payload->getDrugStoreId());
        }
        if ($payload->getName()) {
            $rro->setName($payload->getName());
        }
        if ($payload->getFactoryKey()) {
            $rro->setFactoryKey($payload->getFactoryKey());
        }
        if ($payload->getProducedDate()) {
            $rro->setProducedDate($payload->getProducedDate());
        }
        if ($payload->getPrice()) {
            $rro->setPrice($payload->getPrice());
        }
        if ($payload->getFiscalKey()) {
            $rro->setFiscalKey($payload->getFiscalKey());
        }
        if ($payload->getFiscalEndDate()) {
            $rro->setFiscalEndDate($payload->getFiscalEndDate());
        }
        if ($payload->getFiscalCreateDate()) {
            $rro->setFiscalCreateDate($payload->getFiscalCreateDate());
        }
        if ($payload->getStatus()) {
            $rro->setStatus(RROStatusEnum::from($payload->getStatus()));
        }
    }
}
