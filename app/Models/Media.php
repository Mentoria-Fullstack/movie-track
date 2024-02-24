<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class media extends Model
{
    use HasFactory;

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}
