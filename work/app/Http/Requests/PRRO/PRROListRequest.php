<?php

namespace App\Http\Requests\PRRO;

use Illuminate\Foundation\Http\FormRequest;

class PRROListRequest extends FormRequest
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
                'string',
            ],
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
            'created_at' => [
                'nullable',
                'string',
            ],
            'updated_at' => [
                'nullable',
                'string',
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
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->get('per_page');
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
}
