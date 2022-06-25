<?php

namespace App\RROTracking\Worker;

use App\RROTracking\Worker\Payloads\WorkerCreatePayload;
use App\RROTracking\Worker\Payloads\WorkerUpdatePayload;
use Illuminate\Support\Collection;

interface WorkerServiceInterface
{
    /**
     * @param int $id
     * @return Worker
     */
    public function get(int $id): Worker;

    /**
     * @param WorkerListFilter $filter
     * @return Collection<WorkerListFilter>
     */
    public function list(WorkerListFilter $filter): Collection;

    /**
     * @param WorkerCreatePayload $payload
     * @return Worker
     */
    public function create(WorkerCreatePayload $payload): Worker;

    /**
     * @param Payloads\WorkerUpdatePayload $payload
     * @return Worker
     */
    public function update(WorkerUpdatePayload $payload): Worker;
}
