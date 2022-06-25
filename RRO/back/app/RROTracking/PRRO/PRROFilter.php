<?php

namespace App\RROTracking\PRRO;

use Carbon\Carbon;

class PRROFilter
{
    private int $perPage = 10;

    private ?int $serviceProviderId;

    private ?int $drugStoreId;

    private ?string $fiscalKey;

    private ?Carbon $fiscalCreateDate;

    private ?Carbon $fiscalEndDate;

    private ?Carbon $createdAt;

    private ?Carbon $updatedAt;

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
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     * @return $this
     */
    public function setPerPage(int $perPage): self
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDrugStoreId(): ?int
    {
        return $this->drugStoreId;
    }

    /**
     * @param int|null $drugStoreId
     * @return $this
     */
    public function setDrugStoreId(?int $drugStoreId): self
    {
        $this->drugStoreId = $drugStoreId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiscalKey(): ?string
    {
        return $this->fiscalKey;
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
     * @return Carbon|null
     */
    public function getFiscalCreateDate(): ?Carbon
    {
        return $this->fiscalCreateDate;
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
     * @return Carbon|null
     */
    public function getFiscalEndDate(): ?Carbon
    {
        return $this->fiscalEndDate;
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
