<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class WorkerListRequest extends FormRequest
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
            'drug_store_id' => [
                'nullable',
                'integer',
            ],
            'name' => [
                'nullable',
                'string',
            ],
            'surname' => [
                'nullable',
                'string',
            ],
            'phone' => [
                'nullable',
                'string',
            ],
            'position' => [
                'nullable',
                'string',
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
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->get('phone');
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
    public function getSurname(): ?string
    {
        return $this->get('surname');
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->get('position');
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
    public function getCreatedAt(): ?string
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
