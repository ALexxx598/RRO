<?php

namespace App\Http\Requests\PRRO;

use Illuminate\Foundation\Http\FormRequest;

class PRROUpdateRequest extends FormRequest
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
                'nullable',
                'int',
            ],
            'fiscal_key' => [
                'nullable',
                'string',
            ],
            'fiscal_create_date' => [
                'nullable',
                'date',
            ],
            'fiscal_end_date' => [
                'nullable',
                'date',
            ],
        ];
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
}
