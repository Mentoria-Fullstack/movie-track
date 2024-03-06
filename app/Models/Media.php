<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;

    public $hidden = ['mediable_id', 'mediable_type', 'created_at', 'updated_at'];

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'media_genres');
    }
}
