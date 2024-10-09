<?php

namespace App\Models\Patron;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations as EloquentRelations;
class Project extends Model
{
    use HasFactory;

    public function portfolio(): EloquentRelations\BelongsTo{
        return $this->belongsTo(Portfolio::class);
    }
}
