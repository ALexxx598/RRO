<?php

namespace App\RROTracking\DrugStore;

use DrugStoreCreatePayload;
use DrugStoreUpdatePayload;
use Illuminate\Support\Collection;

class DrugStoreService implements DrugStoreServiceInterface
{
    public DrugStoreRepositoryInterface $drugStoreRepository;

    /**
     * @param DrugStoreRepositoryInterface $drugStoreRepository
     */
    public function __construct(DrugStoreRepositoryInterface $drugStoreRepository)
    {
        $this->drugStoreRepository = $drugStoreRepository;
    }

    /**
     * @inheritdoc
     */
    public function get(int $id): DrugStore
    {
        return $this->drugStoreRepository->get($id);
    }

    /**
     * @inheritdoc
     */
    public function list(DrugStoreListFilter $filter): DrugStoreCollection
    {
        return $this->drugStoreRepository->list($filter);
    }

    /**
     * @inheritDoc
     */
    public function create(DrugStoreCreatePayload $payload): DrugStore
    {
        $drugStore = (new DrugStore())
            ->setFullAddress($payload->getFullAddress())
            ->setLegalEntityId($payload->getLegalEntityId())
            ->setPhone($payload->getPhone())
            ->setCity($payload->getCity());

        return $drugStore->setId($this->drugStoreRepository->save($drugStore));
    }

    /**
     * @inheritDoc
     */
    public function update(DrugStoreUpdatePayload $payload): DrugStore
    {
        $drugStore = $this->drugStoreRepository->get($payload->getId());

        if ($payload->getFullAddress() !== null) {
            $drugStore->setFullAddress($payload->getFullAddress());
        }
        if ($payload->getLegalEntityId() !== null) {
            $drugStore->setLegalEntityId($payload->getLegalEntityId());
        }
        if ($payload->getPhone() !== null) {
            $drugStore->setPhone($payload->getPhone());
        }
        if ($payload->getCity() !== null) {
            $drugStore->setCity($payload->getCity());
        }

        $this->drugStoreRepository->save($drugStore);

        return $drugStore;
    }
}
