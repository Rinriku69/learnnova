<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class CourseController extends Controller
{
    function CourseList() : View {
        $course = Course::get();

        return View('courses.courseList', [
            'courses' => $course,
        ]);
    }

    function CourseView(string $courseCode) : View {
        $course = Course::where('code',$courseCode)
        ->with('expert')
        ->firstOrFail();

        return View('courses.courseView', [
            'course' => $course,
        ]);
    }

    function CourseCreateForm() : View{
        
        return view('courses.createForm');
        
        

    }

    function CourseCreate(ServerRequestInterface $request) : RedirectResponse{
        $data = $request->getParsedBody();

        $course = new Course();
        $course->fill($data);
        $course->save();
        
        return redirect()->route('courses.list')
        ->with('status','Course '.$course->name.' was created');


    }

    function myCourseList() : View {
    
        $course = Course::where('user_id',Auth::user()->id)
        ->get();
        return view('myCourse.expert'
    ,['courses'=>$course]);
    }

    function CourseUpdateForm(string $courseCode): view{
        $course = Course::where('code',$courseCode)
        ->firstorfail();
        
        return view('courses.updateForm'
    ,['course'=>$course]);
    }

    function CourseUpdate(ServerRequestInterface $request, string $couseCode) : RedirectResponse{
        $data = $request->getParsedBody();
        $course = Course::where('code',$couseCode)
        ->firstorfail();

        $course->fill($data);
        $course->save();

        return redirect()->route('courses.view',
        ['courseCode'=> $course->code])
        ->with('status','Course '.$course->name.' was updated');
        
    }

}