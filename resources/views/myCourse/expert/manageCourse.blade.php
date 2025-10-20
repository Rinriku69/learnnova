@extends('layouts.main',
['title'=>'Manage Course' ])

@section('content')
@foreach ($lessons as $lesson)
<h1>Course : {{$lesson->course->name}}</h1><br>
<p>{{$lesson->title}}</p>
<pre>  {{$lesson->content}}</pre>

    
@endforeach
    
@endsection