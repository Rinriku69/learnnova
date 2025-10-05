<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    Function Course() {
        return View('courses.course-info');
    }

    function CourseDesc() {
        return View('courses.course-desc');
        $course = Course::get();

        return View('courses.course-info', [
            'course' => $course,
        ]);
    }

    function CourseDesc(string $courseCode) {
        $course = Course::where('code',$courseCode)->firstOrFail();

        return View('courses.course-desc', [
            'courses' => $course,
        ]);
    }
}
