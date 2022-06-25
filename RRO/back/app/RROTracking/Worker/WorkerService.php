<?php

namespace App\RROTracking\Worker;

use App\RROTracking\Worker\Payloads\WorkerCreatePayload;
use App\RROTracking\Worker\Payloads\WorkerUpdatePayload;
use Illuminate\Support\Collection;

class WorkerService implements WorkerServiceInterface
{
    public WorkerRepositoryInterface $repository;

    public function __construct(WorkerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): Worker
    {
        return $this->repository->get($id);
    }

    /**
     * @inheritDoc
     */
    public function list(WorkerListFilter $filter): Collection
    {
        return $this->repository->list($filter);
    }

    /**
     * @inheritDoc
     */
    public function create(WorkerCreatePayload $payload): Worker
    {
        $drugStore = (new Worker())
            ->setPhone($payload->getPhone())
            ->setSurname($payload->getSurname())
            ->setPosition($payload->getPosition())
            ->setName($payload->getName())
            ->setDrugStoreId($payload->getDrugStoreId());

        return $drugStore->setId($this->repository->save($drugStore));
    }

    /**
     * @inheritDoc
     */
    public function update(WorkerUpdatePayload $payload): Worker
    {
        $drugStore = $this->repository->get($payload->getId());

        if ($payload->getDrugStoreId() !== null) {
            $drugStore->setDrugStoreId($payload->getDrugStoreId());
        }
        if ($payload->getName() !== null) {
            $drugStore->setName($payload->getName());
        }
        if ($payload->getSurname() !== null) {
            $drugStore->setSurname($payload->getSurname());
        }
        if ($payload->getPosition() !== null) {
            $drugStore->setPosition($payload->getPosition());
        }
        if ($payload->getPhone() !== null) {
            $drugStore->setPhone($payload->getPhone());
        }

        $this->repository->save($drugStore);

        return $drugStore;
    }
}
