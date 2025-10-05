<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable = ['code', 'name', 'description', 'img', 'user_id',];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     function isAdministrator(): bool
    {
        return $this->role === 'ADMIN';
    }
}
