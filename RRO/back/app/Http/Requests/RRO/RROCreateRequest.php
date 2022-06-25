<?php

namespace App\Http\Requests;

use App\RROTracking\RRO\RROStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RROCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_provider_id' => [
                'nullable',
                'int'
            ],
            'drug_store_id' => [
                'required',
                'int'
            ],

            'name' => [
                'required',
                'string',
            ],
            'factory_key' => [
                'required',
                'string',
            ],
            'produce_date' => [
                'required',
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
     * @return int
     */
    public function getDrugStoreId(): int
    {
        return $this->get('drug_store_id');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->get('name');
    }

    /**
     * @return string
     */
    public function getFactoryKey(): string
    {
        return $this->get('factory_key');
    }

    /**
     * @return string
     */
    public function getProduceDate(): string
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
}
