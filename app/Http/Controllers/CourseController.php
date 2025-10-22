<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class CourseController extends SearchableController
{
    const int MAX_ITEMS = 5;

    #[\Override]
    function getQuery(): Builder
    {
        return Course::orderBy('code');
    }

    function CourseList(
        ServerRequestInterface $request
    ): View {
        /* Gate::authorize('courseList', Course::class); */
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $course = $this->search($criteria);

        return View('courses.courseList', [
            'courses' => $course->paginate(self::MAX_ITEMS),
            'criteria' => $criteria,
        ]);
    }

    function CourseView(string $courseCode): View
    {
        $course = Course::where('code', $courseCode)
            ->with('expert')
            ->firstOrFail();

        return View('courses.courseView', [
            'course' => $course,
        ]);
    }

    function CourseCreateForm(): View
    {
        Gate::authorize('courseCreate', Course::class);
        return view('courses.createForm');
    }

    function CourseCreate(ServerRequestInterface $request): RedirectResponse
    {
        $data = $request->getParsedBody();
        Gate::authorize('courseCreate', Course::class);
        $course = new Course();
        $course->fill($data);
        $course->user_id = Auth::user()->id;
        $course->save();

        return redirect()->route('courses.myCourse.elist')
            ->with('status', 'Course ' . $course->name . ' was created');
    }

    function ExpertCourseList(
        ServerRequestInterface $request
    ): View {
        $criteria = $this->prepareCriteria($request->getQueryParams());
        $query = Course::where('user_id', Auth::id());
        if (!empty($criteria['term'])) {
            $query->where(function ($q) use ($criteria) {
                $q->where('name', 'like', '%' . $criteria['term'] . '%') // <-- แก้ตรงนี้
                    ->orWhere('description', 'like', '%' . $criteria['term'] . '%'); // <-- และแก้ตรงนี้
            });
        }
        $course = $query->get();

        return view(
            'myCourse.expert.list',
            [
                'courses' => $course,
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
        $course = Course::where('code', $couseCode)
            ->firstorfail();
        Gate::authorize('courseUpdate', $course);
        $course->fill($data);
        $course->save();

        return redirect()->route(
            'courses.view',
            ['courseCode' => $course->code]
        )
            ->with('status', 'Course ' . $course->name . ' was updated');
    }


    function CourseDelete(string $courseCode): RedirectResponse
    {
        /* dd($courseCode); */
        $course = Course::where('code', $courseCode)
            ->FirstOrFail();
        Gate::authorize('courseDelete', $course);
        $course->delete();

        return redirect()->route('courses.myCourse.elist')
            ->with('status', 'Course ' . $course->name . ' was deleted');
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
        $course = $user->CourseAsStudent()
            ->with('expert')
            ->get();
        $criteria = $this->prepareCriteria($request->getQueryParams());

        return view('myCourse.student.list', [
            'courses' => $course,
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
