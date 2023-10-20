<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $fillable = [
        'title',
        'description',
    ];




    public function works(): HasMany {

        return $this->hasMany(Work::class);
    }

}
