@extends('layouts.main', [
    'title' => 'Courses',
])

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="app-cmp-inf-course">
                    <b>Courses 1</b>
                    <a href="{{ route('courses.course-desc') }}">View Course</a>
                </div>
                <div class="app-cmp-inf-course">
                    <b>Courses 2</b>
                    <a href="#">View Course</a>
                </div>
                <div class="app-cmp-inf-course">
                    <b>Courses 3</b>
                    <a href="#">View Course</a>
                </div>
            </div>
        </div>
    </main>
@endsection
