<?php

namespace App\Http\Controllers;

use App\Http\Requests\DrugStore\DrugStoreCreateRequest;
use App\Http\Requests\DrugStore\DrugStoreListRequest;
use App\Http\Requests\DrugStore\DrugStoreUpdateRequest;
use App\Http\Resources\DrugStore\DrugStoreListResource;
use App\Http\Resources\DrugStore\DrugStoreResource;
use App\RROTracking\DrugStore\DrugStoreListFilter;
use App\RROTracking\DrugStore\DrugStoreServiceInterface;
use Carbon\Carbon;
use DrugStoreCreatePayload;
use DrugStoreUpdatePayload;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DrugStoreController extends Controller
{
    private DrugStoreServiceInterface $drugStoreService;

    public function __construct(DrugStoreServiceInterface $drugStoreService)
    {
        $this->drugStoreService = $drugStoreService;
    }

    /**
     * @param int $id
     * @return DrugStoreResource
     */
    public function get(int $id): DrugStoreResource
    {
        return DrugStoreResource::make($this->drugStoreService->get($id));
    }

    /**
     * @param DrugStoreListRequest $request
     * @param int $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function list(DrugStoreListRequest $request, int $id): JsonResponse
    {
        $filter = (new DrugStoreListFilter())
            ->setId($id)
            ->setLegalEntityId($request->getLegalEntityId())
            ->setCity($request->getCity())
            ->setFullAddress($request->getFullAddress())
            ->setPhone($request->getPhone())
            ->setCreatedAt(Carbon::make($request->getCreatedAt()))
            ->setUpdatedAt(Carbon::make($request->getUpdatedAt()));

        if ($request->getPerPage() !== null) {
            $filter->setPerPage($request->getPerPage());
        }

        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => DrugStoreListResource::collection($this->drugStoreService->list($filter)),
        ]);
    }

    /**
     * @param DrugStoreCreateRequest $request
     * @return DrugStoreResource
     */
    public function create(DrugStoreCreateRequest $request): DrugStoreResource
    {
        $payload = (new DrugStoreCreatePayload())
            ->setCity($request->getCity())
            ->setFullAddress($request->getFullAddress())
            ->setPhone($request->getPhone())
            ->setLegalEntityId($request->getLegalEntityId());

        return DrugStoreResource::make($this->drugStoreService->create($payload));
    }

    /**
     * @param DrugStoreUpdateRequest $request
     * @param int $id
     * @return DrugStoreResource
     */
    public function update(DrugStoreUpdateRequest $request, int $id): DrugStoreResource
    {
        $payload = (new DrugStoreUpdatePayload())
            ->setLegalEntityId($request->getLegalEntityId())
            ->setCity($request->getCity())
            ->setFullAddress($request->getFullAddress())
            ->setPhone($request->getPhone())
            ->setId($id);

        return DrugStoreResource::make($this->drugStoreService->update($payload));
    }

    public function delete(int $id)
    {

    }
}
