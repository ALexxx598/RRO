<?php

namespace App\RROTracking\LegalEntity;

use Illuminate\Support\Collection;

class DistinctColumn
{
    private Collection $values;

    private string $column;

    /**
     * @param Collection $value
     * @param string $column
     */
    public function __construct(Collection $value, string $column)
    {
        $this->values = $value;
        $this->column = $column;
    }

    /**
     * @param Collection $value
     * @return DistinctColumn
     */
    public static function make(Collection $value, string $column): DistinctColumn
    {
        return new self($value, $column);
    }

    /**
     * @return Collection
     */
    public function getValues(): Collection
    {
        return $this->values;
    }

    /**
     * @return string
     */
    public function getColumn(): string
    {
        return $this->column;
    }
}
