<?php

namespace App\RROTracking\Worker;

use Illuminate\Support\Collection;

interface WorkerRepositoryInterface
{
    /**
     * @param int $id
     * @return Worker
     */
    public function get(int $id): Worker;

    /**
     * @param WorkerListFilter $filter
     * @return Collection<Worker>
     */
    public function list(WorkerListFilter $filter): Collection;

    /**
     * @param Worker $drugStore
     * @return int
     */
    public function save(Worker $drugStore): int;
}
