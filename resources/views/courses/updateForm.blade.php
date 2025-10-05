@extends('layouts.main',
['title' => 'Update course '.$course->name.' introduction'])

@section('content')
    <form action="{{route('courses.update',
    ['courseCode'=>$course->code])}}" method="POST">
        @csrf
        <label >
            <b>Code</b>
            <input type="text" name="code"  value="{{$course->code}}" readonly >
        </label><br>
        <label >
            <b>Name</b>
            <input type="text" name="name"  value="{{$course->name}}">
        </label><br>
        
        <label>
            <b>Description</b>
            <textarea name="description" id="" cols="30" rows="10">{{$course->description}}</textarea>
        <label ><br>
            <b>Image Name</b>
            <input type="text" name="img"  value=""{{$course->img}} >
        </label><br>
        
        <button type="submit">Update</button>
        <a href="{{ route('courses.view',
        ['courseCode' => $course->code])}}">
            <button type="button">Cancel</button>
        </a>
    </form>
@endsection