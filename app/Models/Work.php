<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedBy;

    protected $fillable = [
        'title',
        'project_id',
        'workflow_id',
        'slug',
        'description'
    ];


    public function project(): BelongsTo {

        return $this->belongsTo(Project::class);
    }

    public function workflow(): BelongsTo {

        return $this->belongsTo(Workflow::class);
    }


}
