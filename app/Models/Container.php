<?php

namespace App\Models;

use App\Models\Collect;
use App\Models\Municip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Container extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['number','tags','lat','lng','municip_id', 'status_id',];

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



    public function collect_count_collected($status = 6)
    {
        return Collect::where('status_id', $status)->count();
    }
}
