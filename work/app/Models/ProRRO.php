<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int|null $service_provider_id
 * @property int $drug_store_id
 * @property string $fiscal_key
 * @property string $fiscal_create_date
 * @property string $fiscal_end_date
 * @property string $created_at
 * @property string $updated_at
 */
class ProRRO extends Model
{
    use HasFactory;

    protected $table = 'pro_r_r_o_s';

    protected $fillable = [
        'id',
        'service_provider_id',
        'drug_store_id',
        'fiscal_key',
        'fiscal_create_date',
        'fiscal_end_date',
        'created_at',
        'updated_at',
    ];
}
