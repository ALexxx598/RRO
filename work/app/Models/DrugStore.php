<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $legal_entity_id
 * @property string phone
 * @property string city
 * @property string full_address
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class DrugStore extends Model
{
    use HasFactory;
}
