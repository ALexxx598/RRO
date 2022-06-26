<?php

namespace App\Http\Controllers;

use App\Http\Requests\PRRO\PRROCreateRequest;
use App\Http\Requests\PRRO\PRROListRequest;
use App\Http\Requests\PRRO\PRROUpdateRequest;
use App\Http\Resources\PRRO\PRROListResource;
use App\Http\Resources\PRRO\PRROResource;
use App\RROTracking\PRRO\PRROFilter;
use App\RROTracking\PRRO\PRROServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use PRROCreatePayload;
use PRROUpdatePayload;

class PRROController extends Controller
{
    private PRROServiceInterface $PRROService;

    public function __construct(PRROServiceInterface $PRROService)
    {
        $this->PRROService = $PRROService;
    }

    /**
     * @param int $id
     * @return PRROResource
     */
    public function get(int $id): PRROResource
    {
        return PRROResource::make($this->PRROService->get($id));
    }

    /**
     * @param PRROListRequest $request
     * @return AnonymousResourceCollection
     */
    public function list(PRROListRequest $request): AnonymousResourceCollection
    {
        $filter = (new PRROFilter())
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()))
            ->setCreatedAt(Carbon::make($request->getCreateAt()))
            ->setUpdatedAt(Carbon::make($request->getUpdatedAt()));

        if ($request->getPerPage() !== null) {
            $filter->setPerPage($request->getPerPage());
        }

        return PRROListResource::collection($this->PRROService->list($filter));
    }

    /**
     * @param PRROCreateRequest $request
     * @return PRROResource
     */
    public function create(PRROCreateRequest $request): PRROResource
    {
        $payload = (new PRROCreatePayload())
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()));

        return PRROResource::make($this->PRROService->create($payload));
    }

    /**
     * @param PRROUpdateRequest $request
     * @param int $id
     * @return PRROResource
     */
    public function update(PRROUpdateRequest $request, int $id): PRROResource
    {
        $payload = (new PRROUpdatePayload())
            ->setId($id)
            ->setServiceProviderId($request->getServiceProviderId())
            ->setDrugStoreId($request->getDrugStoreId())
            ->setFiscalKey($request->getFiscalKey())
            ->setFiscalCreateDate(Carbon::make($request->getFiscalCreateDate()))
            ->setFiscalEndDate(Carbon::make($request->getFiscalEndDate()));

        return PRROResource::make($this->PRROService->update($payload));
    }
}
