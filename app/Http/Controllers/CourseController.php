<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class CourseController extends SearchableController
{
    const int MAX_ITEMS = 3;
    const int LIST = 3;

    #[\Override]
    function getQuery(): Builder
    {
        return Course::orderBy('code');
    }

    function CourseList(
        ServerRequestInterface $request
    ): View {
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $query = $this->search($criteria);

        if (Auth::check()) {
            $user = Auth::user();
            if (!$user->isAdministrator()) {
                
                $query->where(function ($q) use ($user) {
                    $q->where('visibility', 'Public')
                        ->orWhere('user_id', $user->id);
                });
            }
        
        } else {
            $query->where('visibility', 'Public');
        }
        
        $course = $query->withAvg('reviews', 'rating')
                     ->withCount('reviews')
                     ->paginate(self::LIST);

        return View('courses.courseList', [
            'courses' => $course,
            'criteria' => $criteria,

        ]);
    }

    function CourseView(string $courseCode): View
    {
        $course = Course::where('code', $courseCode)
            ->with('expert')
            ->with('reviews')
            ->firstOrFail();
        gate::authorize('view', $course);
        $reviews = $course->reviews()
            ->inrandomorder()
            ->limit(3)
            ->get();

        $reviewCount = $course->reviews?->count() ?? 0;
        $averageRating = $course->reviews?->avg('rating') ?? 0;

        return View('courses.courseView', [
            'course' => $course,
            'reviewCount' => $reviewCount,
            'averageRating' => $averageRating,
            'reviews' => $reviews
        ]);
    }

    function CourseCreateForm(): View
    {
        Gate::authorize('courseCreate', Course::class);
        return view('courses.createForm');
    }

    function CourseCreate(ServerRequestInterface $request): RedirectResponse
    {
        Gate::authorize('courseCreate', Course::class);
        try {
            $data = $request->getParsedBody();
            $course = new Course();
            $course->fill($data);
            $course->code = $data['code'];
            $course->user_id = Auth::user()->id;
            $course->save();

            return redirect()->route('courses.myCourse.elist')
                ->with('status', 'Course ' . $course->name . ' was created');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        } catch (Exception $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => 'Error Occurred',
            ]);
        }
    }

    function ExpertCourseList(
        ServerRequestInterface $request
    ): View {
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $query = Course::where('user_id', Auth::id());
        $filteredQuery = $this->filter($query, $criteria);
        $courses = $filteredQuery->paginate(self::MAX_ITEMS);

        return view(
            'myCourse.expert.list',
            [
                'courses' => $courses,
                'criteria' => $criteria,
            ]
        );
    }

    function CourseUpdateForm(string $courseCode): view
    {
        $course = Course::where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('courseCreate', $course);
        return view(
            'courses.updateForm',
            ['course' => $course]
        );
    }

    function CourseUpdate(ServerRequestInterface $request, string $couseCode): RedirectResponse
    {
        $data = $request->getParsedBody();
        $course = Course::where('code', $couseCode)->firstorfail();
        Gate::authorize('courseUpdate', $course);
        try {
            $course->fill($data);
            $course->save();

            return redirect()->route(
                'courses.view',
                ['courseCode' => $course->code]
            )
                ->with('status', 'Course ' . $course->name . ' was updated');
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }
    }


    function CourseDelete(string $courseCode): RedirectResponse
    {
        $course = Course::where('code', $courseCode)
            ->FirstOrFail();
        Gate::authorize('courseDelete', $course);
        try {
            /* dd($courseCode); */
            $course->delete();

            return redirect()->route('courses.myCourse.elist')
                ->with('status', 'Course ' . $course->name . ' was deleted');
        } catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'alert' => $excp->errorInfo[2],
            ]);
        }
    }

    function CourseRegister(string $courseCode): RedirectResponse
    {
        $user = User::where('id', Auth::user()->id)
            ->firstorfail();
        $course = Course::where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('register', $course);

        $user->CourseAsStudent()->attach($course);
        return redirect()->route('courses.myCourse.slist')
            ->with('status', 'Successfully registered');
    }

    function StudentCourseList(
        ServerRequestInterface $request
    ): VIEW {
        $user = User::where('id', Auth::user()->id)
            ->firstorfail();
        $courses = $user->CourseAsStudent();
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $filteredQuery = $this->filter($courses, $criteria);
        $courses = $filteredQuery->paginate(self::MAX_ITEMS);

        return view('myCourse.student.list', [
            'courses' => $courses,
            'criteria' => $criteria,
        ]);
    }

    function studentList(string $courseCode): view
    {
        $course = Course::where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('courseUpdate', $course);
        $student = $course->students;

        return view('myCourse.expert.student', [
            'students' => $student
        ]);
    }

    function CourseContentManage(string $courseCode): View
    {
        $course  = Course::with('lessons')
            ->where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('courseContentView', $course);
        $lessons = $course->lessons;



        return view(
            'myCourse.expert.manageCourse',
            [
                'lessons' => $lessons,
                'course' => $course
            ]
        );
    }

    function CourseContentView(string $courseCode): View
    {
        $course  = Course::with('lessons')
            ->where('code', $courseCode)
            ->firstorfail();
        Gate::authorize('courseContentView',$course);
        $lessons = $course->lessons;



        return view(
            'courses.content.courseContent',
            [
                'lessons' => $lessons,
                'course' => $course
            ]
        );
    }
}
