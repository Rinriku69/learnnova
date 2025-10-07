<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $fillable = ['code', 'name', 'description', 'img', 'user_id',];

    public function expert(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    function student(): BelongsToMany{
        return $this
        ->belongsToMany(User::class)
        ->withTimestamps();
    }

    
    
}
