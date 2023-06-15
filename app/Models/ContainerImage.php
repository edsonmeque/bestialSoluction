<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ContainerImage
 *
 * @property int $id
 * @property int $container_id
 * @property int $image_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage whereContainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContainerImage whereImageId($value)
 * @mixin \Eloquent
 */
class ContainerImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'container_id', 'image_id',
    ];
}
