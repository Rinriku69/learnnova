<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    Function Course() {
        return View('courses.course-info');
    }

    function CourseDesc() {
        return View('courses.course-desc');
    }
}
