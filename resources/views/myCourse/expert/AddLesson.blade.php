@extends('layouts.main', ['title' => 'Add new lesson'])

@section('content')
    <div class="le-addmain">
        <form action="{{ route('lesson.Create', ['courseCode' => $course->code]) }}" method="POST">
            @csrf
            <div class="le-addmainC">
                <h1>Add new lesson for {{ $course->code }}</h1>
                <label>
                    <b>Title</b>
                    <input type="text" name="title" required>
                </label>
                <label>
                    <b>Content</b>
                    <textarea name="content" id="" cols="100" rows="40" placeholder="Lesson Content" required></textarea><br>
                </label>
                <label>
                    <b>Video Url</b>
                    <input type="text" name="video_url">
                </label>
                <button type="submit">Create</button>
                <a href="{{ route('courses.manage', ['courseCode' => $course->code]) }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
