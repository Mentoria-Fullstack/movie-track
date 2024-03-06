<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class TvShow extends Model
{
    use HasFactory;


    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    public function media(): MorphOne
    {
        return $this->morphOne(media::class, 'mediable');
    }
}
