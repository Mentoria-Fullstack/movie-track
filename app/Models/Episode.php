<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Episode extends Model
{
    use HasFactory;


    public function tvShow(): BelongsTo
    {
        return $this->belongsTo(TvShow::class);
    }
    public function medias(): MorphToMany
    {
        return $this->morphToMany(Media::class, 'Mediable');
    }

}
