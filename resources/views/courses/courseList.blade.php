@extends('layouts.main', [
    'title' => 'Courses',
])

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                @foreach($courses as $course)
                <div class="app-cmp-inf-course">
                    <b>{{$course->code}} {{$course->name}}</b>
                    <a href="{{ route('courses.view',['courseCode' => $course->code]) }}">View Course</a>
                </div> 
                @endforeach
            </div>
        </div>
    </main>
@endsection