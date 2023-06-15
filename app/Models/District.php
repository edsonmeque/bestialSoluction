<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\District
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Buind|null $buinds
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Municip> $municips
 * @property-read int|null $municips_count
 * @property-read \App\Models\Province|null $province
 *
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Municip> $municips
 * @mixin \Eloquent
 */
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
        'province_id',
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
