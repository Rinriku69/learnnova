<?php

namespace App\Policies;

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
}
