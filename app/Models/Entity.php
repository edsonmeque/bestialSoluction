<?php

namespace App\Models;

use App\Models\User;
use App\Models\District;
use App\Models\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [ 'image','name','tags','email','phone','log','address','district_id','user_id','bairros'];


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
