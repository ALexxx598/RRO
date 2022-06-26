<?php

namespace App\RROTracking\BaseClasses;

use Illuminate\Support\Collection;

class FiniteCollection
{
    private Collection $items;

    private ?int $perPage;

    private ?int $currentPage;

    private ?int $nextPage;

    private ?int $prevPage;

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param Collection $items
     * @return $this
     */
    public function setItems(Collection $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int|null $perPage
     * @return $this
     */
    public function setPerPage(?int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @param int|null $currentPage
     * @return $this
     */
    public function setCurrentPage(?int $currentPage): self
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    /**
     * @param int|null $nextPage
     * @return $this
     */
    public function setNextPage(?int $nextPage): self
    {
        $this->nextPage = $nextPage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrevPage(): ?int
    {
        return $this->prevPage;
    }

    /**
     * @param int|null $prevPage
     * @return $this
     */
    public function setPrevPage(?int $prevPage): self
    {
        $this->prevPage = $prevPage;

        return $this;
    }
}
