@extends('layouts.main',
['title'=>'Manage Course' ])

@section('content')
<h1>Course : {{$course->name}}</h1><br>
<a href="{{route('lesson.CreateForm',['courseCode'=>$course->code])}}">+Add new lesson</a>
@foreach ($lessons as $lesson)
<form action="{{route('lesson.delete'
,['lessonID'=>$lesson->id])}}" method="POST">
@csrf
<a href="{{route('lesson.view',['lessonID'=>$lesson->id])}}">{{$lesson->title}}</a>


<button type="submit">Remove this lesson</button>
</form>
    
@endforeach
    
@endsection