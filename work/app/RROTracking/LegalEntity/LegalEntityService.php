<?php

namespace App\RROTracking\LegalEntity;

use App\RROTracking\DrugStore\DrugStore;
use App\RROTracking\DrugStore\DrugStoreServiceInterface;
use App\RROTracking\LegalEntity\Payloads\EntityCreatePayload\EntityCreatePayload;
use App\RROTracking\LegalEntity\Payloads\EntityCreatePayload\EntityUpdatePayload;
use Illuminate\Support\Collection;

class LegalEntityService implements LegalEntityServiceInterface
{
    private LegalEntityRepositoryInterface $entityRepository;

    public function __construct(LegalEntityRepositoryInterface $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    public function get(int $id): LegalEntity
    {
        return $this->entityRepository->get($id);
    }

    public function list(LegalEntityFilter $filter): LegalEntityCollection
    {
        return $this->entityRepository->list($filter);
    }

    /**
     * @param EntityCreatePayload $payload
     * @return LegalEntity]
     */
    public function create(EntityCreatePayload $payload): LegalEntity
    {
        $legalEntity = (new LegalEntity())
            ->setName($payload->getName())
            ->setOkpo($payload->getOkpo())
            ->setCity($payload->getCity());

        return $legalEntity->setId($this->entityRepository->save($legalEntity));
    }

    public function update(EntityUpdatePayload $payload): LegalEntity
    {
        $legalEntity = $this->entityRepository->get($payload->getId());

        if ($payload->getName() !== null) {
            $legalEntity->setName($payload->getName());
        }
        if ($payload->getOkpo() !== null) {
            $legalEntity->setOkpo($payload->getOkpo());
        }
        if ($payload->getCity() !== null) {
            $legalEntity->setCity($payload->getCity());
        }

        $this->entityRepository->save($legalEntity);

        return $legalEntity;
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->entityRepository->delete($id);
    }

    /**
     * @inheritDoc
     */
    public function filterList(string $column): DistinctColumn
    {
        if (!in_array($column, LegalEntity::COLUMNS)) {
            throw new \Exception();
            //TODO: create exception
        }

        return $this->entityRepository->getFilterList($column);
    }
}
