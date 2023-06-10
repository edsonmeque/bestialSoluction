<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
       'name',
       'country_id'
   ];

   /**
    * Get the country that owns the Region
    *
    * @return \Illuminate\Countrybase\Eloquent\Relations\BelongsTo
    */
   public function country(): BelongsTo
   {
       return $this->belongsTo(Country::class);
   }
}
