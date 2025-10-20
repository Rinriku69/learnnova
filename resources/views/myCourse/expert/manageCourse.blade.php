@extends('layouts.main',
['title'=>'Manage Course' ])

@section('content')
<h1>Course : {{$course->name}}</h1><br>
@foreach ($lessons as $lesson)

<p>{{$lesson->title}}</p>
<pre>  {{$lesson->content}}</pre>

    
@endforeach
    
@endsection