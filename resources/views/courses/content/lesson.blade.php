@extends('layouts.main'
,['title'=>$lesson->title])

@section('content')
<pre>{{$lesson->content}}</pre>
    
@endsection