<?php

namespace App\Http\Requests\PRRO;

use Illuminate\Foundation\Http\FormRequest;

class PRROCreateRequest extends FormRequest
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
                'int',
            ],
            'drug_store_id' => [
                'required',
                'int',
            ],
            'fiscal_key' => [
                'required',
                'string',
            ],
            'fiscal_create_date' => [
                'required',
                'date',
            ],
            'fiscal_end_date' => [
                'required',
                'date',
            ],
        ];
    }

    /**
     * @return string
     */
    public function getFiscalKey(): string
    {
        return $this->get('fiscal_key');
    }

    /**
     * @return string
     */
    public function getFiscalCreateDate(): string
    {
        return $this->get('fiscal_create_date');
    }
    /**
     * @return string
     */
    public function getFiscalEndDate(): string
    {
        return $this->get('fiscal_end_date');
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
}
