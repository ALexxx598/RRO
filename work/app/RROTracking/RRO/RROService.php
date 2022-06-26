<?php

namespace App\RROTracking\RRO;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use RROCreatePayload;
use RROUpdatePayload;

class RROService implements RROServiceInterface
{
    private RRORepositoryInterface $RRORepository;

    public function __construct(RRORepositoryInterface $RRORepository)
    {
        $this->RRORepository = $RRORepository;
    }

    public function get(int $id): RRO
    {
        return $this->RRORepository->get($id);
    }

    public function list(RROListFilter $filter): Collection
    {
        return $this->RRORepository->list($filter);
    }

    public function create(RROCreatePayload $payload): RRO
    {
        $rro = (new RRO())
            ->setServiceProviderId($payload->getServiceProviderId())
            ->setDrugStoreId($payload->getDrugStoreId())
            ->setName($payload->getName())
            ->setFactoryKey($payload->getFactoryKey())
            ->setProducedDate($payload->getProducedDate())
            ->setPrice($payload->getPrice())
            ->setFiscalKey($payload->getFiscalKey())
            ->setFiscalCreateDate($payload->getFiscalCreateDate())
            ->setFiscalEndDate($payload->getFiscalEndDate())
            ->setStatus($payload->getStatus());

        return $rro->setId($this->RRORepository->save($rro));
    }

    public function update(RROUpdatePayload $payload): RRO
    {
        $rro = $this->RRORepository->get($payload->getId());

        $mapper = new RROPayloadToAggregateMapper();
        $mapper->mapPayloadToRRO($rro, $payload);

        $this->RRORepository->save($rro);

        return $rro;
    }
}
