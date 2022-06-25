<?php

namespace App\Http\Requests\LegalEntity;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EntityListRequest extends FormRequest
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
            'cities' => [
                'nullable',
                'array'
            ],
            'names' => [
                'nullable',
                'array'
            ],
            'okpo' => [
                'nullable',
                'string'
            ],
            'updated_at' => [
                'nullable',
                'date'
            ],
            'created_at' => [
                'nullable',
                'date'
            ],
        ];
    }

    /**
     * @return array|null
     */
    public function getCities(): ?array
    {
        return $this->get('cities');
    }

    /**
     * @return Carbon|null
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->get('updated_at');
    }

    /**
     * @return Carbon|null
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->get('created_at');
    }

    /**
     * @return array|null
     */
    public function getNames(): ?array
    {
        return $this->get('names');
    }

    /**
     * @return string|null
     */
    public function getOKPO(): ?string
    {
        return $this->get('okpo');
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->get('per_page');
    }
}
