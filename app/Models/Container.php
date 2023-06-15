<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Container
 *
 * @property int $id
 * @property int $number
 * @property string $tags
 * @property float $lat
 * @property float $lng
 * @property int $municip_id
 * @property int $status_id
 * @property int $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Collect|null $collect
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @property-read Municip|null $municips
 * @property-read \App\Models\Status|null $status
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Container newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Container newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Container query()
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereMunicipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Collect> $collects
 * @property-read int|null $collects_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @mixin \Eloquent
 */
class Container extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['number', 'tags', 'lat', 'lng', 'municip_id', 'status_id'];

    /**
     * The images that belong to the Container
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'container_images');
    }

    /**
     * Get the user that owns the Container
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municips(): BelongsTo
    {
        return $this->belongsTo(Municip::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the collect that owns the Container
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collect(): BelongsTo
    {
        return $this->belongsTo(Collect::class);
    }

    /**
     * Get the collect that owns the Container
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collects(): HasMany
    {
        return $this->hasMany(Collect::class);
    }

    public function collect_count_collected($status = 6)
    {
        return Collect::where('status_id', $status)->count();
    }
}
