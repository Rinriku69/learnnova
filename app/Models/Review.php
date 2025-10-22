<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'course_id', 'rating', 'comment'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function averageRating() {
        return $this->reviews()->avg('rating');
    }
}
