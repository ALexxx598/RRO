<?php

namespace App\Http\Requests\DrugStore;

use Illuminate\Foundation\Http\FormRequest;

class DrugStoreCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'legal_entity_id' => [
                'required',
                'integer',
            ],
            'phone' => [
                'nullable',
                'string',
            ],
            'city' => [
                'nullable',
                'string',
            ],
            'full_address' => [
                'required',
                'string',
            ],
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
     * @return string
     */
    public function getFullAddress(): string
    {
        return $this->get('full_address');
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    /**
     * @return int
     */
    public function getLegalEntityId(): int
    {
        return $this->get('legal_entity_id');
    }
}
