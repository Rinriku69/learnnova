@extends('layouts.main', ['title' => 'Manage Course'])

@section('header')
    <div class="c-header">
        <div class="cview-backbutton">
            <a href="{{ session()->get('bookmarks.courses.content', route('courses.list')) }}">&lt;
                Back</a>
        </div>
    </div>
@endsection

@section('content')
    @php
        session()->put('bookmarks.lesson.view', url()->full());
    @endphp
    <div class="ccontent-main">
        <div class="ccontent">
            <h1>Course : {{ $course->name }}</h1><br>
            @if ($course->code === 'J101')
                <a href="{{ route('quiz.start') }}" class="linkQ">Quiz</a>
            @endif
            @can('courseReview', $course)
                <a href="{{ route('courses.reviews.createForm', ['courseCode' => $course->code]) }}">
                    Review This Course
                </a>
            @endcan
            <h3>Lesson Select :</h3>
            @foreach ($lessons as $lesson)
            <br>
                - <a href="{{ route('lesson.view', ['lessonID' => $lesson->id]) }}">{{ $lesson->title }}</a>
                @can('lessonUpdate', $lesson->course)
                    <a href="{{ route('lesson.updateForm', ['lessonID' => $lesson->id]) }}" class="updatelink">&lt&lt Update this
                        lesson >></a>
                @endcan
            @endforeach
        </div>
    </div>
@endsection
