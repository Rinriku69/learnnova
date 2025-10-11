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

    public function courseDelete(User $user, Course $course): bool
{
    
    if ($user->isAdministrator()) {
        /*  $studentQuery = $course->students();
        dd($studentQuery->toSql(), $studentQuery->getBindings()); */
        return !$course->students()->exists();
    }

    if ($user->isExpert()) {
      /*  $studentQuery = $course->students();
        dd($studentQuery->toSql(), $studentQuery->getBindings()); */
        return $user->id === $course->user_id && !$course->students()->exists();
        
    }

    return false;
}

    function courseManipulate(User $user): bool
    {
        if ($user->isAdministrator() || $user->isExpert()) {

            return true;
        } else {
            return false;
        }
    }

    function courseCreate(User $user): bool
    {
        return $this->courseManipulate($user);
    }

    function courseUpdate(User $user): bool
    {
        return $this->courseManipulate($user);
    }

    function ExpertCourseList(User $user): bool
    {
        return $this->courseManipulate($user);
    }

    function StudentCourseList(User $user): bool
    {
        return $user->isStudent();
    }
}
