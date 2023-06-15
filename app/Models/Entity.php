<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Entity
 *
 * @property int $id
 * @property string|null $image
 * @property string $name
 * @property string $tags
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $district_id
 * @property int $buind_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Container> $containers
 * @property-read int|null $containers_count
 * @property-read District|null $district
 * @property-read User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Entity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereBuindId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereUserId($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Container> $containers
 * @mixin \Eloquent
 */
class Entity extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'tags', 'email', 'phone', 'log', 'address', 'district_id', 'user_id', 'bairros'];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function containers(): HasMany
    {
        return $this->hasMany(Container::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
