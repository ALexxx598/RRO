<?php

namespace App\Http\Requests\RRO;

use App\RROTracking\RRO\RROStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RROListRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'per_page' => [
                'nullable',
                'integer'  ,
            ],
            'service_provider_id' => [
                'nullable',
                'int'
            ],
            'drug_store_id' => [
                'nullable',
                'int'
            ],

            'name' => [
                'nullable',
                'string',
            ],
            'factory_key' => [
                'nullable',
                    'string',
            ],
            'produce_date' => [
                'nullable',
                'date'
            ],
            'price' => [
                'nullable',
                'float'
            ],

            'fiscal_key' => [
                'nullable',
                'string'
            ],
            'fiscalCreateDate' => [
                'nullable',
                'date'
            ],
            'fiscalEndDate' => [
                'nullable',
                'date'
            ],

            'status' => [
                'nullable',
                'string',
                Rule::in(RROStatusEnum::toArray()),
            ],

            'created_at' => [
                'nullable',
                'date',
            ],
            'updated_at' => [
                'nullable',
                'date',
            ],
        ];
    }

    /**
     * @return int|null
     */
    public function getServiceProviderId(): ?int
    {
        return $this->get('service_provider_Id');
    }

    /**
     * @return int|null
     */
    public function getDrugStoreId(): ?int
    {
        return $this->get('drug_store_id');
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @return string|null
     */
    public function getFactoryKey(): ?string
    {
        return $this->get('factory_key');
    }

    /**
     * @return string|null
     */
    public function getProduceDate(): ?string
    {
        return $this->get('produce_date');
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->get('price');
    }

    /**
     * @return string|null
     */
    public function getFiscalKey(): ?string
    {
        return $this->get('fiscal_key');
    }

    /**
     * @return string|null
     */
    public function getFiscalCreateDate(): ?string
    {
        return $this->get('fiscal_create_date');
    }
    /**
     * @return string|null
     */
    public function getFiscalEndDate(): ?string
    {
        return $this->get('fiscal_end_date');
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @return string|null
     */
    public function getCreateAt(): ?string
    {
        return $this->get('created_at');
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->get('updated_at');
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->get('per_page');
    }
}
