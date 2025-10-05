@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
<a href="{{route('courses.createForm')}}">Add new course</a>
    
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                @foreach ($courses as $course)
                    <div class="app-cmp-inf-course">
                    <b>{{$course->name}}</b>
                    <a href="#">View Course</a>
                    <a href="#">Manage Course</a>
                </div> 
                @endforeach
               
                
            </div>
        </div>
    </main>
@endsection
