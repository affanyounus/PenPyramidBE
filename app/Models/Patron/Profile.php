<?php

namespace App\Models\Patron;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations as Relations;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory, HasUuids;

    public function user(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
