<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    public function category(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function author(): BelongsToMany {
        return $this->belongsToMany(Author::class);
    }
}
