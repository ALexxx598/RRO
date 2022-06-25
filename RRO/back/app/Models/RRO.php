<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int|null $service_provider_id
 * @property int $drug_store_id
 * @property string $name
 * @property string $factory_key
 * @property string $produce_date,
 * @property float|null $price
 * @property string|null $fiscal_key
 * @property string|null $fiscal_create_date
 * @property string|null $fiscal_end_date
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class RRO extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'service_provider_id',
        'drug_store_id',
        'name',
        'factory_key',
        'produce_date',
        'price',
        'fiscal_key',
        'fiscal_create_date',
        'fiscal_end_date',
        'status',
        'created_at',
        'updated_at',
    ];
}
