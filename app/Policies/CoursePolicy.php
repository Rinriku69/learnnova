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



    function register(User $user, Course $course): bool
    {
        return $user->isStudent() && !$course->students()->where('user_id', $user->id)->exists();
    }

    public function courseDelete(User $user, Course $course): bool
    {

        if ($user->isAdministrator()) {
            /*  $studentQuery = $course->students();
        dd($studentQuery->toSql(), $studentQuery->getBindings()); */ //debug
            return !$course->students()->exists();
        }

        if ($user->isExpert()) {

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

    function courseUpdate(User $user, Course $course): bool
    {
        if ($user->isAdministrator()) {
            return true;
        }

        if ($user->isExpert()) {

            return $user->id === $course->user_id;
        }

        return false;
    }

    function ExpertCourseList(User $user): bool
    {
        return $this->courseManipulate($user);
    }

    function StudentCourseList(User $user): bool
    {
        return $user->isStudent();
    }

    function courseContentView(User $user, Course $course): bool
    {
        if ($user->isAdministrator()) {

            return true;
        }

        if ($user->isExpert()) {

            return $user->id === $course->user_id;
        }
        if ($user->isStudent()) {

            return $course->students()->where('user_id', $user->id)->exists();
        }
        return false;
    }

    function lessonCreate(User $user, Course $course): bool
    {
        return $this->courseUpdate($user,$course);
    }
    function courseReview(User $user, Course $course): bool
    {
        if ($user->isStudent()) {

            return $course->students()->where('user_id', $user->id)->exists();
        }
        return false;
    }
}
