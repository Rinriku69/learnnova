@extends('layouts.main', [
    'title' => 'Courses',
])

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                @foreach($course as $courses)
                <div class="app-cmp-inf-course">
                    <b>{{$courses->code}} {{$courses->name}}</b>
                    <a href="{{ route('courses.course-desc',['courseCode' => $courses->code]) }}">View Course</a>
                </div> 
                @endforeach
            </div>
        </div>
    </main>
@endsection
