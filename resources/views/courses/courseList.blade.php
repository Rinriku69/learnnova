@extends('layouts.main', [
    'title' => 'Courses',
])

@section('header')
    <search>
        <form action="{{ route('courses.list') }}" method="GET" class="app-cmp-search-form">
            <div>
                <label for="app-inp-search-term">Search</label>
                <input type="text" name="term" placeholder="Search courses..." value="{{ $criteria['term'] }}">
                <button type="submit" class="primary">Search</button>
                <a href="{{ route('courses.list') }}">
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
                    <div class="app-cmp-inf-course">
                        <b>{{ $course->code }} {{ $course->name }}</b>
                        <a href="{{ route('courses.view', ['courseCode' => $course->code]) }}">View Course</a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
