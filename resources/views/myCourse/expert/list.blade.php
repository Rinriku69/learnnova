@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
    <search>
        <form action="{{ route('courses.myCourse.elist') }}" method="GET" class="app-cmp-search-form">
            <div>
                <b>Search</b>
                <input type="text" name="term" placeholder="Search courses..." value="{{ $criteria['term']}}">
                <button type="submit" class="primary">Search</button>
                <a href="{{ route('courses.myCourse.elist') }}">
                    <button type="button" class="accent">
                        Clear
                    </button>
                </a>
            </div>
        </form>
    </search>
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                @foreach ($courses as $course)
                <form
                    action="{{ route('courses.delete', [
                        'courseCode' => $course->code,
                    ]) }}"
                    method="post" id="delete-button{{ $course->code }}">
                    @csrf
                </form>
                <div class="app-cmp-inf-course">
                        <b>{{ $course->name }}</b>
                        <a href="{{ route('courses.content', ['courseCode' => $course->code]) }}">View Course</a>
                        <a href="{{ route('courses.manage', ['courseCode' => $course->code]) }}">Manage Course</a>
                        <a href="{{ route('courses.student', ['courseCode' => $course->code]) }}">Students</a>
                        @can('courseDelete', $course)
                            <button type="submit" form="delete-button{{ $course->code }}">Remove this course</button>
                        @endcan
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
