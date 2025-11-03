<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

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
        Gate::authorize('lessonCreate', $course);
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
        Gate::authorize('lessonCreate', $course);
        try {
            $lesson = new Lesson();
            $lesson->fill($data);

            $lesson->courses_id = $course->id;
            $lesson->save();

            return redirect()->route(
                'courses.manage',
                ['courseCode' => $course->code]
            )
            ->with('status', 'Lesson ' . $lesson->title . ' was created');
        } catch (Throwable $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' =>'An Error occurred',
            ]);
        }
    }

    function Delete(string $lessonID): RedirectResponse
    {
        $lesson = Lesson::where('id', $lessonID)
            ->with('course')
            ->FirstOrFail();
        $course = $lesson->course;
        Gate::authorize('lessonCreate', $course);
        try {
            $lesson->delete();

            return redirect()->route('courses.manage', ['courseCode' => $lesson->course->code])
                ->with('status', 'Lesson ' . $lesson->title . ' was deleted');
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }catch (Exception $excp) {
            return redirect()->back()->withErrors([
                'alert' => $excp->getMessage(),
            ]);
        }
    }
    function UpdateForm(string $lessonID): view
    {
        
        $lesson = Lesson::where('id', $lessonID)
            ->with('course')
            ->FirstOrFail();
        $course = $lesson->course;
        Gate::authorize('lessonCreate', $course);
        
        return view('myCourse.expert.Updatelesson',['lesson'=>$lesson]);
      
    }
    function Update(string $lessonID,ServerRequestInterface $request): RedirectResponse
    {
        $data = $request->getParsedBody();
        $lesson = Lesson::where('id', $lessonID)
            ->with('course')
            ->FirstOrFail();
        $course = $lesson->course;
        Gate::authorize('lessonCreate', $course);
        try {
            $lesson->fill($data);
            $lesson->save();

            return redirect()->route(
                'lesson.view',
                ['lessonID' => $lessonID]
            )
                ->with('status', 'Lesson  ' . $lesson->title . ' was updated');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }


        
      
    }
}
