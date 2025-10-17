@extends('layouts.main', [
    'title' => 'My-Courses',
])



    

@section('content')
    <main>
       
        <div class="container">
            <div class="wrapper">
                @foreach ($courses as $course)
              
                    <div class="app-cmp-inf-course">
                    <b>{{$course->code}}</b>
                    <b>{{$course->name}}</b>
                    <b>By {{$course->expert->name}}</b>
                    <a href="#">Study</a>

                </div> 
                @endforeach
               
                
            </div>
        </div>
    </main>
@endsection