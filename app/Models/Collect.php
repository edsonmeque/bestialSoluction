<?php

namespace App\Models;

use App\Models\User;
use App\Models\Status;
use App\Models\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collect extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','container_id','status_id','created_at'];


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
