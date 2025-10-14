<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        Gate::authorize('courseCreate',Course::class);
        return view('courses.createForm');
        
        

    }

    function CourseCreate(ServerRequestInterface $request) : RedirectResponse{
        $data = $request->getParsedBody();
        Gate::authorize('courseCreate',Course::class);
        $course = new Course();
        $course->fill($data);
        $course->save();
        
        return redirect()->route('courses.myCourse.elist')
        ->with('status','Course '.$course->name.' was created');


    }

    function ExpertCourseList() : View {
    
        $course = Course::where('user_id',Auth::user()->id)
        ->get();
        return view('myCourse.expert.list'
    ,['courses'=>$course]);
    }

    function CourseUpdateForm(string $courseCode): view{
        $course = Course::where('code',$courseCode)
        ->firstorfail();
        Gate::authorize('courseCreate',$course);
        return view('courses.updateForm'
    ,['course'=>$course]);
    }

    function CourseUpdate(ServerRequestInterface $request, string $couseCode) : RedirectResponse{
        $data = $request->getParsedBody();
        $course = Course::where('code',$couseCode)
        ->firstorfail();
        Gate::authorize('courseCreate',$course);
        $course->fill($data);
        $course->save();

        return redirect()->route('courses.view',
        ['courseCode'=> $course->code])
        ->with('status','Course '.$course->name.' was updated');
        
    }


    function CourseDelete(string $courseCode) : RedirectResponse{
        /* dd($courseCode); */
        $course = Course::where('code',$courseCode)
        ->FirstOrFail();
        Gate::authorize('courseDelete',$course);
        $course->delete();
        
        return redirect()->route('courses.myCourse.elist')
        ->with('status','Course '.$course->name.' was deleted');
    }

    function CourseRegister(string $courseCode):RedirectResponse{
        $user = User::where('id',Auth::user()->id)
        ->firstorfail();
        $course = Course::where('code',$courseCode)
        ->firstorfail();
        Gate::authorize('register',$course);
    $user->CourseAsStudent()->attach($course);
    return redirect()->route('courses.myCourse.slist')
    ->with('status','Successfully registered');
    }

    function StudentCourseList(): view{
         $user = User::where('id',Auth::user()->id)
        ->firstorfail();
        $course = $user->CourseAsStudent()
        ->with('expert')
        ->get();
        
        return view('myCourse.student.list',[
            'courses'=>$course
        ]);
    }

    function studentList(string $courseCode): view{
        $course = Course::where('code',$courseCode)
        ->firstorfail();
        $student = $course->students;

        return view('myCourse.expert.student',[
            'students' => $student
        ]);
    }
}