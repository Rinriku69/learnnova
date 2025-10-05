<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

     function mycourse(): bool
    {
        return true;
    }

    function register(User $user): bool
    {
        return $user->isStudent();
    }
}
