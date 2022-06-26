<?php

namespace App\Http\Requests\LegalEntity;

use Illuminate\Foundation\Http\FormRequest;

class EntityUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'city' => [
                'nullable',
                'string'
            ],
            'okpo' => [
                'nullable',
                'string'
            ],
            'name' => [
                'nullable',
                'string'
            ]
        ];
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->get('city');
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
    public function getOKPO(): ?string
    {
        return $this->get('okpo');
    }
}
