<?php

class DrugStoreUpdatePayload
{
    private int $id;

    private ?int $legalEntityId;

    private ?string $phone;

    private ?string $city;

    private ?string $fullAddress;

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
    public function getLegalEntityId(): ?int
    {
        return $this->legalEntityId;
    }

    /**
     * @param int|null $legalEntityId
     * @return $this
     */
    public function setLegalEntityId(?int $legalEntityId): self
    {
        $this->legalEntityId = $legalEntityId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullAddress(): ?string
    {
        return $this->fullAddress;
    }

    /**
     * @param string|null $fullAddress
     * @return $this
     */
    public function setFullAddress(?string $fullAddress): self
    {
        $this->fullAddress = $fullAddress;
        return $this;
    }
}
