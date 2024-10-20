<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Item extends Model
{
    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
