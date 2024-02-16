<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Genre extends Model
{
    use HasFactory;

    
    public function movies(): MorphToMany
    {
        return $this->morphedByMany(Movie::class, 'Genreable');
    }

    public function tvshows(): MorphToMany
    {
        return $this->morphedByMany(Tvshow::class, 'Genreable');
    }
}
