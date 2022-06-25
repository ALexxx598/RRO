<?php

namespace App\RROTracking\LegalEntity;

use App\RROTracking\Filters\UnionFilter;
use Carbon\Carbon;

class LegalEntityFilter extends UnionFilter
{
    private ?array $city;

    private ?array $name;

    private ?string $okpo;

    private ?Carbon $createdAt;

    private ?Carbon $updatedAt;

    /**
     * @return array|null
     */
    public function getCities(): ?array
    {
        return $this->city;
    }

    /**
     * @param array|null $city
     * @return self
     */
    public function setCities(?array $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    /**
     * @param Carbon|null $createdAt
     * @return self
     */
    public function setCreatedAt(?Carbon $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    /**
     * @param Carbon|null $updatedAt
     * @return self
     */
    public function setUpdatedAt(?Carbon $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getNames(): ?array
    {
        return $this->name;
    }

    /**
     * @param array|null $name
     * @return $this
     */
    public function setNames(?array $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOkpo(): ?string
    {
        return $this->okpo;
    }

    /**
     * @param string|null $okpo
     * @return $this
     */
    public function setOkpo(?string $okpo): self
    {
        $this->okpo = $okpo;

        return $this;
    }
}
