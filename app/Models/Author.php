<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Author extends Model
{
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function nationality(): HasOne
    {
        return $this->hasOne(Nationality::class);
    }
}
