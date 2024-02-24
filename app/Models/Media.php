<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }

    public function generes()
    {
        return $this->belongsToMany(Genre::class);
    }
}
