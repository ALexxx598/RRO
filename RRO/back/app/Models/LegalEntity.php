<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property int $okpo
 * @property string $city
 * @property Carbon $updated_at
 * @property Carbon $created_at
 */
class LegalEntity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'okpo',
        'city',
        'created_at',
        'updated_at',
    ];
}
