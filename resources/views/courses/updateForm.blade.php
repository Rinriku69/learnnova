@extends('layouts.main', ['title' => 'Update course ' . $course->name . ' introduction'])

@section('content')
    <div class="cupdate-form">
        <form action="{{ route('courses.update', ['courseCode' => $course->code]) }}" method="POST">
            @csrf
            <label>
                <b>Code</b>
                <input type="text" name="code" value="{{ old('code', $course->code) }}" readonly>
            </label><br>
            <label>
                <b>Name</b>
                <input type="text" name="name" value="{{ old('name', $course->name) }}">
            </label><br>
            <select name="visibility" id="">
                <option value="Private" @selected($course->visibility == 'Private')>Private</option>
                <option value="Public" @selected($course->visibility == 'Public')>Public</option>
            </select> <br>

            <label>
                <b>Description</b>
                <textarea name="description" id="" cols="60" rows="20">{{ old('description', $course->description) }}</textarea>
            </label>
            <label><br>
                <b>Image Name</b>
                <input type="text" name="img" value="{{ old('img', $course->img) }}">
            </label><br>

            <button type="submit">Update</button>
            <a href="{{ route('courses.view', ['courseCode' => $course->code]) }}">
                Cancel
            </a>
        </form>
    </div>
@endsection
