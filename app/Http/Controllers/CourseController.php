<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    function CourseList() : View {
        $course = Course::get();

        return View('courses.courseList', [
            'courses' => $course,
        ]);
    }

    function CourseView(string $courseCode) : View {
        $course = Course::where('code',$courseCode)->firstOrFail();

        return View('courses.courseView', [
            'course' => $course,
        ]);
    }

    function myCourseList() : View {
        return view('myCourse.myCourseList');
    }

}