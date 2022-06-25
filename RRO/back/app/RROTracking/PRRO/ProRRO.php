<?php

namespace App\RROTracking\PRRO;

use Carbon\Carbon;

class ProRRO
{
    private ?int $id;

    private int $drugStoreId;

    private ?int $serviceProviderId;

    private string $fiscalKey;

    private Carbon $fiscalCreateDate;

    private Carbon $fiscalEndDate;

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
     * @return int|null
     */
    public function getServiceProviderId(): ?int
    {
        return $this->serviceProviderId;
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
     * @return int
     */
    public function getDrugStoreId(): int
    {
        return $this->drugStoreId;
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
     * @return string
     */
    public function getFiscalKey(): string
    {
        return $this->fiscalKey;
    }

    /**
     * @param string $fiscalKey
     * @return $this
     */
    public function setFiscalKey(string $fiscalKey): self
    {
        $this->fiscalKey = $fiscalKey;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getFiscalCreateDate(): Carbon
    {
        return $this->fiscalCreateDate;
    }

    /**
     * @param Carbon $fiscalCreateDate
     * @return $this
     */
    public function setFiscalCreateDate(Carbon $fiscalCreateDate): self
    {
        $this->fiscalCreateDate = $fiscalCreateDate;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getFiscalEndDate(): Carbon
    {
        return $this->fiscalEndDate;
    }

    /**
     * @param Carbon $fiscalEndDate
     * @return $this
     */
    public function setFiscalEndDate(Carbon $fiscalEndDate): self
    {
        $this->fiscalEndDate = $fiscalEndDate;
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
