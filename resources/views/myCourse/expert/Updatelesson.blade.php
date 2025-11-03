@extends('layouts.main', ['title' => 'Update Lesson ' . $lesson->title . ' introduction'])

@section('content')
    <div class="cupdate-form">
        <form action="{{ route('lesson.update', ['lessonID' => $lesson->id]) }}" method="POST">
            @csrf
            <label>
                <b>Title</b>
                <input type="text" name="title" value="{{ old('title', $lesson->title) }}" readonly>
            </label><br>
            <label>
                <b>Content</b>
                <textarea name="content" id="" cols="60" rows="20">{{ old('content', $lesson->content) }}</textarea>
            </label>
            <label><br>
                <b>Video URL</b>
                <input type="text" name="video_url" value="{{ old('video_url', $lesson->video_url) }}">
            </label><br>

            <button type="submit">Update</button>

            <a href="{{ session()->get('bookmarks.lesson.view', route('lesson.view', ['lessonID' => $lesson->id])) }}">&lt;
                Cancel</a>
        </form>
    </div>
@endsection
