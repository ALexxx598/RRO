<?php

namespace App\Http\Controllers;

use App\Http\Requests\RRO\RROListRequest;
use App\Http\Requests\RRO\RROUpdateRequest;
use App\Http\Requests\RROCreateRequest;
use App\Http\Resources\RRO\RROListResource;
use App\Http\Resources\RRO\RROResource;
use App\RROTracking\RRO\RROListFilter;
use App\RROTracking\RRO\RROService;
use App\RROTracking\RRO\RROServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use RROCreatePayload;
use RROUpdatePayload;

class RROController extends Controller
{
    private RROServiceInterface $RROService;

    public function __construct(RROServiceInterface $RROService)
    {
        $this->RROService = $RROService;
    }

    /**
     * @param int $id
     */
    public function get(int $id): RROResource
    {
        return RROResource::make($this->RROService->get($id));
    }

    /**
     * @param RROListRequest $request
     * @return AnonymousResourceCollection
     */
    public function list(RROListRequest $request): AnonymousResourceCollection
    {
        $filter = (new RROListFilter())
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setName($request->getName())
            ->setFactoryKey($request->getFactoryKey())
            ->setProducedDate(Carbon::make($request->getProduceDate()))
            ->setPrice($request->getPrice())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()))
            ->setStatus($request->getStatus())
            ->setCreatedAt(Carbon::make($request->getCreateAt()))
            ->setUpdatedAt(Carbon::make($request->getUpdatedAt()));

        if ($request->getPerPage() !== null) {
            $filter->setPerPage($request->getPerPage());
        }

        return RROListResource::collection($this->RROService->list($filter));
    }

    public function create(RROCreateRequest $request): RROResource
    {
        $payload = (new RROCreatePayload())
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setName($request->getName())
            ->setFactoryKey($request->getFactoryKey())
            ->setProducedDate(Carbon::make($request->getProduceDate()))
            ->setPrice($request->getPrice())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()))
            ->setStatus($request->getStatus());

        return RROResource::make($this->RROService->create($payload));
    }

    /**
     * @param RROUpdateRequest $request
     * @param int $id
     * @return RROResource
     */
    public function update(RROUpdateRequest $request, int $id): RROResource
    {
        $payload = (new RROUpdatePayload())
            ->setId($id)
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setName($request->getName())
            ->setFactoryKey($request->getFactoryKey())
            ->setProducedDate(Carbon::make($request->getProduceDate()))
            ->setPrice($request->getPrice())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()))
            ->setStatus($request->getStatus());

        return RROResource::make($this->RROService->update($payload));
    }

    public function delete($id)
    {

    }
}
