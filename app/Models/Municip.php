<?php

namespace App\Models;

use App\Models\User;
use App\Models\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municip extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'name','tags','email','phone','log','address','district_id','user_id'];
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
}
