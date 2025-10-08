@extends('layouts.main',
['title' => "Add new course"])

@section('content')
    <form action="{{route('courses.create')}}" method="POST">
        @csrf
        <label >
            <b>Code</b>
            <input type="text" name="code"  required>
        </label><br>
        <label >
            <b>Name</b>
            <input type="text" name="name"  required>
        </label><br>
        <label >
            <b>Description</b>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Add course Description"></textarea><br>
        <label >
            <b>Image File name</b>
            <input type="text" name="img" required>
        </label><br>
        <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
        <button type="submit">Create</button>
        <a href="{{route('courses.myCourse.elist')}}">
            <button type="button">Cancel</button>
        </a>
    </form>
@endsection