<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
      'name'
    ];

    /**
     * Returns all the pictures that belongs to the gallery.
     *
     * @return HasMany
     */
    public function pictures(): HasMany
    {
        return $this->hasMany('App\Picture');
    }
}
