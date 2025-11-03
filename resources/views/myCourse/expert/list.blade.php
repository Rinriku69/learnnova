@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
    <div class="mc-header">
        <search>
            <form action="{{ route('courses.myCourse.elist') }}" method="GET" class="app-cmp-search-form">
                <div class="clist-search-group">
                    <label for="app-inp-search-term">Search</label>
                    <input type="text" name="term" placeholder="Search courses..." value="{{ $criteria['term'] }}">
                    <button type="submit" class="primary">Search</button>
                    <a href="{{ route('courses.myCourse.elist') }}">
                        Clear
                    </a>
                </div>
            </form>
            <div class="mc-header-add">
                @can('courseCreate', \App\Models\Course::class)
                    <a href="{{ route('courses.createForm') }}">Add new course</a>
                @endcan
            </div>
        </search>
    </div>
@endsection

@section('content')
    @php
        session()->put('bookmarks.courses.content', url()->full());
        session()->put('bookmarks.courses.manage', url()->full());
        session()->put('bookmarks.courses.view', url()->full());
        session()->put('bookmarks.courses.student', url()->full());
    @endphp
    <main class="mc-main">
        <div class="mc-container">
            <div class="mc-wrapper">
                @foreach ($courses as $course)
                    <form
                        action="{{ route('courses.delete', [
                            'courseCode' => $course->code,
                        ]) }}"
                        method="post" id="delete-button{{ $course->code }}">
                        @csrf
                    </form>
                    <div class="mc-inf-course">
                        <b>{{ $course->code }}</b>
                        <b>{{ $course->name }}</b>
                        <a href="{{ route('courses.content', ['courseCode' => $course->code]) }}">View Course</a>
                        <a href="{{ route('courses.manage', ['courseCode' => $course->code]) }}">Manage Course</a>
                        <a href="{{ route('courses.view', ['courseCode' => $course->code]) }}">View Course
                            introduction</a>
                        <a href="{{ route('courses.student', ['courseCode' => $course->code]) }}">Students</a>
                        @can('courseDelete', $course)
                            <button type="submit" form="delete-button{{ $course->code }}">Remove this course</button>
                        @endcan
                    </div>
                @endforeach
            </div>
        </div>
        <div class="page-link">
            {{ $courses->withQueryString()->links() }}
        </div>
    </main>
@endsection
