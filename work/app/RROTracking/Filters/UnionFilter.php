<?php

namespace App\RROTracking\Filters;

use App\RROTracking\LegalEntity\LegalEntityFilter;

abstract class UnionFilter
{
    protected int $perPage = 10;

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     * @return self
     */
    public function setPerPage(int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }
}
