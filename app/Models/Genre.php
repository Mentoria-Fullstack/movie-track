<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    public $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['name'];

    public function medias()
    {
        return $this->belongsToMany(Media::class);
    }
}
