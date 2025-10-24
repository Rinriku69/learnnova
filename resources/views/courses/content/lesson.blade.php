@extends('layouts.main'
,['title'=>$lesson->title])

@section('content')
<pre>{{$lesson->content}}</pre>
    @if ($lesson->title === 'Hiragana')
        <a href="{{route('quiz.start')}}">Quiz</a>
    @endif
@endsection