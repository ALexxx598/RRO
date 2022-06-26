<?php

namespace App\Http\Requests\LegalEntity;

use Illuminate\Foundation\Http\FormRequest;

class EntityCreateRequest extends FormRequest
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
                'required',
                'string'
            ],
            'okpo' => [
                'required',
                'string'
            ],
            'name' => [
                'required',
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
