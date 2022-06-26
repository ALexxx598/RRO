<?php

namespace App\RROTracking\Worker\Payloads;



class WorkerCreatePayload
{
    private int $drugStoreId;

    private ?string $name;

    private string $surname;

    private ?string $phone;

    private ?string $position;

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
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return $this
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

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
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     * @return $this
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }
}
