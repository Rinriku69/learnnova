<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    function course() : BelongsTo{
        return $this->belongsTo(Course::class,'courses_id');
    }
}
