<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Collect
 *
 * @property int $id
 * @property int $status_id
 * @property float $lat
 * @property float $lng
 * @property int $container_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Container|null $container
 * @property-read Status|null $status
 * @property-read User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Collect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collect query()
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereContainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collect whereUserId($value)
 * @method static \Database\Factories\CollectFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Collect extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'container_id', 'status_id', 'created_at', 'lat', 'lng'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Container that owns the Collect
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function container()
    {
        return $this->belongsTo(Container::class);
    }

    /**
     * Get the status that owns the Collect
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
