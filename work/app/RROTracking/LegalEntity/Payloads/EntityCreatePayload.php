<?php
namespace App\RROTracking\LegalEntity\Payloads\EntityCreatePayload;

class EntityCreatePayload
{
    private string $name;

    private string $okpo;

    private string $city;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @return string
     */
    public function getOkpo(): string
    {
        return $this->okpo;
    }

    /**
     * @param string $okpo
     * @return $this
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
     * @return $this
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
