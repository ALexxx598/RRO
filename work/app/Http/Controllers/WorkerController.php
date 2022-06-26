<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\WorkerCreateRequest;
use App\Http\Requests\Worker\WorkerListRequest;
use App\Http\Requests\Worker\WorkerUpdateRequest;
use App\Http\Resources\Worker\WorkerListResource;
use App\Http\Resources\Worker\WorkerResource;
use App\RROTracking\Worker\Payloads\WorkerCreatePayload;
use App\RROTracking\Worker\Payloads\WorkerUpdatePayload;
use App\RROTracking\Worker\WorkerListFilter;
use App\RROTracking\Worker\WorkerService;
use App\RROTracking\Worker\WorkerServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WorkerController extends Controller
{
    private WorkerServiceInterface $workerService;

    public function __construct(WorkerServiceInterface $workerService)
    {
        $this->workerService = $workerService;
    }

    /**
     * @param int $id
     * @return WorkerResource
     */
    public function get(int $id): WorkerResource
    {
        return WorkerResource::make($this->workerService->get($id));
    }

    /**
     * @param WorkerListRequest $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function list(WorkerListRequest $request): AnonymousResourceCollection
    {
        $filter = (new WorkerListFilter())
            ->setPhone($request->getPhone())
            ->setName($request->getName())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setPosition($request->getPosition())
            ->setSurname($request->getSurname())
            ->setCreatedAt(Carbon::make($request->getCreatedAt()))
            ->setUpdatedAt(Carbon::make($request->getUpdatedAt()));

        if ($request->getPerPage() !== null) {
            $filter->setPerPage($request->getPerPage());
        }

        return WorkerListResource::collection($this->workerService->list($filter));
    }

    /**
     * @param WorkerCreateRequest $request
     * @return WorkerResource
     */
    public function create(WorkerCreateRequest $request): WorkerResource
    {
        $payload = (new WorkerCreatePayload())
            ->setPhone($request->getPhone())
            ->setName($request->getName())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setPosition($request->getPosition())
            ->setSurname($request->getSurname());

        return WorkerResource::make($this->workerService->create($payload));
    }

    /**
     * @param WorkerUpdateRequest $request
     * @param int $id
     * @return WorkerResource
     */
    public function update(WorkerUpdateRequest $request, int $id): WorkerResource
    {
        $payload = (new WorkerUpdatePayload())
            ->setId($id)
            ->setPhone($request->getPhone())
            ->setName($request->getName())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setPosition($request->getPosition())
            ->setSurname($request->getSurname());

        return WorkerResource::make($this->workerService->update($payload));
    }

    public function delete($id)
    {

    }
}
