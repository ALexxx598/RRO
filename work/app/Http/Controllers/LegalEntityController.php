<?php

namespace App\Http\Controllers;

use App\Http\Requests\LegalEntity\EntityCreateRequest;
use App\Http\Requests\LegalEntity\EntityListRequest;
use App\Http\Requests\LegalEntity\EntityUpdateRequest;
use App\Http\Resources\LegalEntity\DistinctColumnResource;
use App\Http\Resources\LegalEntity\LegalEntityResource;
use App\Http\Resources\LegalEntity\LegalEntityListResource;
use App\RROTracking\LegalEntity\LegalEntityFilter;
use App\RROTracking\LegalEntity\LegalEntityModelMapper;
use App\RROTracking\LegalEntity\LegalEntityRepository;
use App\RROTracking\LegalEntity\LegalEntityService;
use App\RROTracking\LegalEntity\LegalEntityServiceInterface;
use App\RROTracking\LegalEntity\Payloads\EntityCreatePayload\EntityCreatePayload;
use App\RROTracking\LegalEntity\Payloads\EntityCreatePayload\EntityUpdatePayload;
use Illuminate\Http\JsonResponse;

class LegalEntityController extends Controller
{
    public function __construct(private LegalEntityServiceInterface $entityService
    ) {
    }

    /**
     * @param int $id
     * @return LegalEntityResource
     */
    public function get(int $id): JsonResponse
    {
        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => LegalEntityResource::make($this->entityService->get($id)),
        ]);
    }

    /**
     * @param EntityListRequest $request
     * @return JsonResponse
     */
    public function list(EntityListRequest $request): JsonResponse
    {
        $filter = (new LegalEntityFilter())
            ->setCities($request->getCities())
            ->setNames($request->getNames())
            ->setOkpo($request->getOKPO())
            ->setCreatedAt($request->getCreatedAt())
            ->setUpdatedAt($request->getUpdatedAt());

        if ($request->getPerPage() !== null) {
            $filter->setPerPage($request->getPerPage());
        }

        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => LegalEntityListResource::make($this->entityService->list($filter)),
        ]);
    }

    /**
     * @param string $column
     * @return JsonResponse
     */
    public function getFilterList(string $column): JsonResponse
    {
        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => DistinctColumnResource::make($this->entityService->filterList($column)),
        ]);
    }

    /**
     * @param EntityCreateRequest $request
     * @return JsonResponse
     */
    public function create(EntityCreateRequest $request): JsonResponse
    {
        $payload = (new EntityCreatePayload())
            ->setCity($request->getCity())
            ->setName($request->getName())
            ->setOkpo($request->getOKPO());

        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => LegalEntityResource::make($this->entityService->create($payload)),
        ]);
    }

    /**
     * @param EntityUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(EntityUpdateRequest $request, int $id): JsonResponse
    {
        $payload = (new EntityUpdatePayload())
            ->setCity($request->getCity())
            ->setName($request->getName())
            ->setOkpo($request->getOKPO())
            ->setId($id);

        return response()->json([
            'status' => JsonResponse::HTTP_OK,
            'data' => LegalEntityResource::make($this->entityService->update($payload)),
        ]);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $this->entityService->delete($id);

        return response()->json([
            'status' => JsonResponse::HTTP_OK,
        ]);
    }
}
