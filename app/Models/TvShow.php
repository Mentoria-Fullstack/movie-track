<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    use HasFactory;


    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
