<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MyCoursesController extends Controller
{
    function MyCourses(){
        return View('courses.my-courses');
    }
}
