<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class TvShow extends Model
{
    use HasFactory;

    public function Genreables(): MorphToMany
    {
        return $this->morphToMany(Genreable::class, 'Genresable');
    }
}
