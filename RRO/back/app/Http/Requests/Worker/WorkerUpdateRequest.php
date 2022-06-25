<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class WorkerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
}
