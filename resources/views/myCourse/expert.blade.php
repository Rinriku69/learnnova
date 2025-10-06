@extends('layouts.main', [
    'title' => 'My-Courses',
])

@section('header')
@can('courseCreate', \App\Models\Course::class)
    <a href="{{route('courses.createForm')}}">Add new course</a>
@endcan

    
@endsection
@section('content')
    <main>
       
        <div class="container">
            <div class="wrapper">
                @foreach ($courses as $course)
                <form action="{{route('courses.delete',[
                    'courseCode'=>$course->code])}}"
                    method="post" id="delete-button">
                @csrf</form>
                    <div class="app-cmp-inf-course">
                    <b>{{$course->name}}</b>
                    <a href="#">View Course</a>
                    <a href="#">Manage Course</a>
                   <button type="submit" form="delete-button">Remove this course</button> 
                </div> 
                @endforeach
               
                
            </div>
        </div>
    </main>
@endsection
