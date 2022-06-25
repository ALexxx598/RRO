<?php

namespace App\RROTracking\RRO;

use Carbon\Carbon;

class RRO
{
    private ?int $id;
    private ?int $serviceProviderId;
    private int $drugStoreId;

    private string $name;
    private string $factoryKey;
    private Carbon $producedDate;
    private ?float $price;

    private ?string $fiscalKey;
    private ?Carbon $fiscalCreateDate;
    private ?Carbon $fiscalEndDate;

    private ?string $status;

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
     * @return int|null
     */
    public function getServiceProviderId(): ?int
    {
        return $this->serviceProviderId;
    }

    /**
     * @return int
     */
    public function getDrugStoreId(): int
    {
        return $this->drugStoreId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFactoryKey(): string
    {
        return $this->factoryKey;
    }

    /**
     * @return Carbon
     */
    public function getProducedDate(): Carbon
    {
        return $this->producedDate;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return string|null
     */
    public function getFiscalKey(): ?string
    {
        return $this->fiscalKey;
    }

    /**
     * @return Carbon|null
     */
    public function getFiscalCreateDate(): ?Carbon
    {
        return $this->fiscalCreateDate;
    }

    /**
     * @return Carbon|null
     */
    public function getFiscalEndDate(): ?Carbon
    {
        return $this->fiscalEndDate;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return Carbon|null
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    /**
     * @return Carbon|null
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
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
     * @param int|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId(?int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @param int $drugStoreId
     * @return $this
     */
    public function setDrugStoreId(int $drugStoreId): self
    {
        $this->drugStoreId = $drugStoreId;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $factoryKey
     * @return $this
     */
    public function setFactoryKey(string $factoryKey): self
    {
        $this->factoryKey = $factoryKey;
        return $this;
    }

    /**
     * @param Carbon $producedDate
     * @return $this
     */
    public function setProducedDate(Carbon $producedDate): self
    {
        $this->producedDate = $producedDate;
        return $this;
    }

    /**
     * @param float|null $price
     * @return $this
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param string|null $fiscalKey
     * @return $this
     */
    public function setFiscalKey(?string $fiscalKey): self
    {
        $this->fiscalKey = $fiscalKey;
        return $this;
    }

    /**
     * @param Carbon|null $fiscalCreateDate
     * @return $this
     */
    public function setFiscalCreateDate(?Carbon $fiscalCreateDate): self
    {
        $this->fiscalCreateDate = $fiscalCreateDate;
        return $this;
    }

    /**
     * @param Carbon|null $fiscalEndDate
     * @return $this
     */
    public function setFiscalEndDate(?Carbon $fiscalEndDate): self
    {
        $this->fiscalEndDate = $fiscalEndDate;
        return $this;
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
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
     * @param Carbon|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(?Carbon $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
