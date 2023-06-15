<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * App\Models\Municip
 *
 * @property int $id
 * @property string $name
 * @property string $tags
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $district_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Container> $containers
 * @property-read int|null $containers_count
 * @property-read \App\Models\District|null $district
 * @property-read User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Municip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Municip whereUserId($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Collect> $collects
 * @property-read int|null $collects_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Container> $containers
 * @mixin \Eloquent
 */
class Municip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'tags', 'email', 'phone', 'log', 'address', 'district_id', 'user_id'];

    /**
     * Get the region that owns the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

        /**
         * Get all of the comments for the Municip
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function containers(): HasMany
        {
            return $this->hasMany(Container::class);
        }

                public function user(): BelongsTo
                {
                    return $this->belongsTo(User::class);
                }

        /**
         * Get all of the deployments for the project.
         */
        public function collects(): HasManyThrough
        {
            return $this->hasManyThrough(Collect::class, Container::class);
        }
}
