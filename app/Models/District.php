<?php

namespace App\Models;

use App\Models\Buind;
use App\Models\Municip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;
    /**
* The attributes that are mass assignable.
*
* @var array<int, string>
*/
protected $fillable = [
'name',
'province_id'
];

/**
 * Get the region that owns the Province
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function province(): BelongsTo
{
    return $this->belongsTo(Province::class);
}

 /**
     * Get all of the entities for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municips()
    {
        return $this->hasMany(Municip::class);
    }

/**
     * Get all of the entities for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buinds()
    {
        return $this->hasOne(Buind::class);
    }

}
