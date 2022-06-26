<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $drug_store_id
 * @property string $name
 * @property string $surname
 * @property string $position
 * @property string $phone
 * @property string $created_at
 * @property string $updated_at
 */
class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        '$drug_store_id',
        'name',
        'surname',
        'position',
        'phone',
        'created_at',
        'updated_at',
    ];
}
