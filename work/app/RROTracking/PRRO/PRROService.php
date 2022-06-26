<?php

namespace App\RROTracking\PRRO;

use Illuminate\Support\Collection;
use PRROCreatePayload;
use PRROUpdatePayload;

class PRROService implements PRROServiceInterface
{
    private PRRORepositoryInterface $PRRORepository;

    public function __construct(PRRORepositoryInterface $PRRORepository)
    {
        $this->PRRORepository = $PRRORepository;
    }

    public function get(int $id): ProRRO
    {
        return $this->PRRORepository->get($id);
    }

    public function list(PRROFilter $filter): Collection
    {
        return $this->PRRORepository->list($filter);
    }

    public function create(PRROCreatePayload $payload): ProRRO
    {
        $pRRO = (new ProRRO())
            ->setServiceProviderId($payload->getServiceProviderId())
            ->setDrugStoreId($payload->getDrugStoreId())
            ->setFiscalKey($payload->getFiscalKey())
            ->setFiscalCreateDate($payload->getFiscalCreateDate())
            ->setFiscalEndDate($payload->getFiscalEndDate());

        return $pRRO->setId($this->PRRORepository->save($pRRO));
    }

    public function update(PRROUpdatePayload $payload): ProRRO
    {
        $pRRO = $this->PRRORepository->get($payload->getId());

        if ($payload->getFiscalEndDate() !== null) {
            $pRRO->setFiscalEndDate($payload->getFiscalEndDate());
        }
        if ($payload->getFiscalKey() !== null) {
            $pRRO->setFiscalKey($payload->getFiscalKey());
        }
        if ($payload->getFiscalCreateDate() !== null) {
            $pRRO->setFiscalCreateDate($payload->getFiscalCreateDate());
        }
        if ($payload->getServiceProviderId() !== null) {
            $pRRO->setServiceProviderId($payload->getServiceProviderId());
        }
        if ($payload->getDrugStoreId() !== null) {
            $pRRO->setDrugStoreId($payload->getDrugStoreId());
        }

        $this->PRRORepository->save($pRRO);

        return $pRRO;
    }
}
