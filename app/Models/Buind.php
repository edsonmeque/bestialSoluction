<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Buind
 *
 * @property int $id
 * @property string $name
 * @property int $district_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read District|null $district
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Buind newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buind newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buind query()
 * @method static \Illuminate\Database\Eloquent\Builder|Buind whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buind whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buind whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buind whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buind whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Buind extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'district_id',
    ];

    /**
     * Get the region that owns the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
