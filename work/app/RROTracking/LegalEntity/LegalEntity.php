<?php

namespace App\RROTracking\LegalEntity;

use Carbon\Carbon;

class LegalEntity
{
    public const COLUMNS = [
        'name',
        'city'
    ];

    private ?int $id;

    private string $name;

    private string $okpo;

    private string $city;

    private ?Carbon $createdAt;

    private ?Carbon $updatedAt;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getOkpo(): string
    {
        return $this->okpo;
    }

    /**
     * @param string $okpo
     * @return self
     */
    public function setOkpo(string $okpo): self
    {
        $this->okpo = $okpo;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(string $city): self
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
     * @return $this
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
     * @return $this
     */
    public function setUpdatedAt(?Carbon $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
