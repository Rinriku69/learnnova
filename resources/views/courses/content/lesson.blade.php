@extends('layouts.main'
,['title'=>$lesson->title])

@section('content')
<pre>{{$lesson->content}}</pre>
    @if ($lesson->id === 8)
        <a href="{{route('quiz.choice')}}">Quiz</a>
    @endif
@endsection