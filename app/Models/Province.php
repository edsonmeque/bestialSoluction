<?php

namespace App\Models;

use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;
        /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
    'name',
    'region_id'
];


/**
 * Get the region that owns the Province
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function region(): BelongsTo
{
    return $this->belongsTo(Region::class);
}
}
