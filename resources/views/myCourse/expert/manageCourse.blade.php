@extends('layouts.main', ['title' => 'Manage Course'])

@section('header')
    <div class="c-header">
        <div class="cview-backbutton">
            <a href="{{ session()->get('bookmarks.couses.manage', route('courses.myCourse.elist')) }}">&lt;
                Back</a>
        </div>
    </div>
@endsection

@section('content')
    @php
        session()->put('bookmarks.lesson.view', url()->full());
    @endphp
    <div class="mc-manage-main">
        <h1>Course : {{ $course->name }}</h1><br>
        <a href="{{ route('lesson.CreateForm', ['courseCode' => $course->code]) }}">+Add new lesson</a>
        @foreach ($lessons as $lesson)
            <form action="{{ route('lesson.delete', ['lessonID' => $lesson->id]) }}" method="POST">
                @csrf
                <a href="{{ route('lesson.view', ['lessonID' => $lesson->id]) }}">{{ $lesson->title }}</a>
                @can('lessonUpdate', $lesson->course)
                    <a href="{{ route('lesson.updateForm', ['lessonID' => $lesson->id]) }}" class="updateC">Update this lesson</a>
                @endcan
                <button type="submit">Remove this lesson</button>
            </form>
        @endforeach
    </div>
@endsection
