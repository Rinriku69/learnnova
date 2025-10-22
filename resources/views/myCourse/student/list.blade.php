@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
    <search>
        <form action="{{ route('courses.myCourse.slist') }}" method="GET" class="app-cmp-search-form">
            <div>
                <b>Search</label>
                <input type="text" name="term" placeholder="Search courses..." value="{{ $criteria['term'] }}">
                <button type="submit" class="primary">Search</button>
                <a href="{{ route('courses.myCourse.slist') }}">
                    <button type="button" class="accent">
                        Clear
                    </button>
                </a>
            </div>
        </form>
    </search>
    @can('courseCreate', \App\Models\Course::class)
        <a href="{{ route('courses.createForm') }}">Add new course</a>
    @endcan
@endsection

    

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                @foreach ($courses as $course)
                    <div class="app-cmp-inf-course">
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