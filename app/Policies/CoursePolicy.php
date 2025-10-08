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

     

    function register(User $user): bool
    {
        return $user->isStudent();
    }

    function courseDelete(User $user): bool{
        if($user->isAdministrator()||$user->isExpert()){
            return true;
        }else{
            return false;
        }
    }

    function courseCreate(User $user): bool{
        return $this->courseDelete($user);
    }

    function courseUpdate(User $user): bool{
        return $this->courseDelete($user);
    }

    function ExpertCourseList(User $user): bool
    {
        return $this->courseDelete($user);
    }

    function StudentCourseList(User $user): bool
    {
        return $user->isStudent();
    }


}
