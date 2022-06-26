<?php

namespace App\RROTracking\RRO;

use Spatie\Enum\Enum;

/**
 * @method static self NOT_USE()
 * @method static self IN_USE()
 * @method static self UN_ACTIVE()
 */
final class RROStatusEnum extends Enum
{
    protected const NOT_USE = 'NOT_USE';
    protected const IN_USE = 'IN_USE';
    protected const UN_ACTIVE = 'UN_ACTIVE';
}
