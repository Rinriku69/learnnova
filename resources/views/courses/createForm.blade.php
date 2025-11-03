@extends('layouts.main', ['title' => 'Add new course'])

@section('content')
    <div class="ccreate-form">
        <form action="{{ route('courses.create') }}" method="POST">
            @csrf
            <label>
                <b>Code</b>
                <input type="text" name="code" value="{{ old('code', '') }}" required>
            </label><br>
            <label>
                <b>Name</b>
                <input type="text" name="name" value="{{ old('name', '') }}" required>
            </label><br>
            <label>
                <b>Description</b>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Add course Description">{{ old('description', '') }}</textarea>
            </label><br>
            <label class="ccreate-img">
                <b>Image File name</b>
                <input type="text" name="img" value="{{ old('img', '') }}" required>
            </label><br>

            <button type="submit">Create</button>
            <a href="{{ route('courses.myCourse.elist') }}">
                Cancel
            </a>
        </form>
    </div>
@endsection
