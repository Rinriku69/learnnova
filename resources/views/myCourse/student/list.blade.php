@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
<div class="mc-header">
    <search>
        <form action="{{ route('courses.myCourse.slist') }}" method="GET" class="app-cmp-search-form">
            <div class="clist-search-group">
                <label for="app-inp-search-term">Search</label>
                <input type="text" name="term" placeholder="Search courses..." value="{{ $criteria['term'] }}">
                <button type="submit" class="primary">Search</button>
                <a href="{{ route('courses.myCourse.slist') }}">
                        Clear
                </a>
            </div>
        </form>
    <div class="page-link">
    {{ $courses->withQueryString()->links() }}
    </div>
    </search>
</div>
@endsection

    

@section('content')
@php
    session()->put('bookmarks.courses.content', url()->full());
@endphp
    <main class="mc-main">
        <div class="mc-container">
            <div class="mc-wrapper">
                @foreach ($courses as $course)
                    <div class="mc-inf-course">
                    <b>{{$course->code}}</b>
                    <b>{{$course->name}}</b>
                    <b>By {{$course->expert->name}}</b>
                    <a href="{{route('courses.content',['courseCode'=>$course->code])}}">Study</a>
                </div> 
                @endforeach
            </div>
        </div>
    </main>
@endsection