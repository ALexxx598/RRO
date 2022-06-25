<?php

use Carbon\Carbon;

class PRROCreatePayload
{
    private ?int $serviceProviderId;

    private int $drugStoreId;

    private string $fiscalKey;

    private Carbon $fiscalCreateDate;

    private Carbon $fiscalEndDate;

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
}
