<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LessonController extends Controller
{
    function view(string $lessonID): View
    {

        $lesson = Lesson::where('id', $lessonID)
            ->with('course')
            ->firstorfail();

        $course = $lesson->course;
        Gate::authorize('courseContentView', $course);

        return view(
            'courses.content.lesson',
            ['lesson' => $lesson,]
        );
    }

    function CreateForm(string $courseCode): View
    {
        $course = Course::where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('lessonCreate',$course);
        return view(
            'myCourse.expert.Addlesson',
            ['course' => $course]
        );
    }

    function Create(
        string $courseCode,
        ServerRequestInterface $request
    ): RedirectResponse {
        $data = $request->getParsedBody();
        $course = Course::where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('lessonCreate',$course);
        $lesson = new Lesson();
        $lesson->fill($data);
        
        $lesson->courses_id = $course->id;
        $lesson->save();

        return redirect()->route(
            'courses.manage',
            ['courseCode' => $course->code]
        );
    }

    function Delete(string $lessonID): RedirectResponse
    {

        $lesson = Lesson::where('id', $lessonID)
            ->with('course')
            ->FirstOrFail();
        $course = $lesson->course;
        Gate::authorize('lessonCreate',$course);
        $lesson->delete();

        return redirect()->route('courses.manage', ['courseCode' => $lesson->course->code])
            ->with('status', 'Lesson ' . $lesson->title . ' was deleted');
    }
}
