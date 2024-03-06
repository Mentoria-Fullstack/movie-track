<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','description','cover','release_date', 'duration'];

    public function media(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
