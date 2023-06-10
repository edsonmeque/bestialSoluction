<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','lat','lng'
    ];

    public function containers(): BelongsToMany
    {
        return $this->belongsToMany(Container::class, 'container_image');
    }
}
