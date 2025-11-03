@extends('layouts.main', ['title' => $lesson->title])

@section('header')
    <div class="c-header">
        <div class="cview-backbutton">
            <a
                href="{{ session()->get('bookmarks.lesson.view', route('courses.content', ['courseCode' => $lesson->course->code])) }}">&lt;
                Back</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="les-main">
        <div class="les-mainC">
            <p>{{ $lesson->content }}</p>
        </div>
    </div>
@endsection
