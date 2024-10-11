<?php

namespace App\Models\Patron;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations as EloquentRelations;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function projects(): EloquentRelations\HasMany{
        return $this->HasMany(Project::class);
    }
}
