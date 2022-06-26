<?php

namespace App\RROTracking\LegalEntity\Payloads\EntityCreatePayload;

class EntityUpdatePayload
{
    private int $id;

    private ?string $name;

    private ?string $okpo;

    private ?string $city;

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
     * @return int|null
     */
    public function getOkpo(): ?int
    {
        return $this->okpo;
    }

    /**
     * @param string|null $okpo
     */
    public function setOkpo(?string $okpo): self
    {
        $this->okpo = $okpo;

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
}
