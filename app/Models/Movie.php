<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','description','cover','release_date', 'duration'];

    public function medias(): MorphToMany
    {
        return $this->morphToMany(Media::class, 'Mediable');
    }
}
