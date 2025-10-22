@extends('layouts.main', ['title' => 'Manage Course'])

@section('content')
    <h1>Course : {{ $course->name }}</h1><br>
    @can('courseReview', $course)
       <a href="{{ route('courses.reviews.createForm', ['courseCode' => $course->code]) }}">
        Review This Course
    </a>  
    @endcan
   
    <h3>Lesson Select :</h3>
    @foreach ($lessons as $lesson)
        - <a href="{{ route('lesson.view', ['lessonID' => $lesson->id]) }}">{{ $lesson->title }}</a>
    @endforeach
@endsection
