<?php

use Carbon\Carbon;

class RROUpdatePayload
{
    private int $id;
    private ?int $serviceProviderId;
    private ?int $drugStoreId;

    private ?string $name;
    private ?string $factoryKey;
    private ?Carbon $producedDate;
    private ?float $price;

    private ?string $fiscalKey;
    private ?Carbon $fiscalCreateDate;
    private ?Carbon $fiscalEndDate;

    private ?string $status;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): self
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFactoryKey(): ?string
    {
        return $this->factoryKey;
    }

    /**
     * @param string|null $factoryKey
     * @return $this
     */
    public function setFactoryKey(?string $factoryKey): self
    {
        $this->factoryKey = $factoryKey;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getProducedDate(): ?Carbon
    {
        return $this->producedDate;
    }

    /**
     * @param Carbon|null $producedDate
     * @return $this
     */
    public function setProducedDate(?Carbon $producedDate): self
    {
        $this->producedDate = $producedDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
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
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
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
}
