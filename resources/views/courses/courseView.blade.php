@extends('layouts.main', [
    'title' => 'description',
])


@section('header')
@auth
     @if ($course->expert->id === \Auth::user()->id)
        <a href="{{route('courses.updateForm',[
        'courseCode' => $course->code])}}">
            <b>Update Course introduction</b>
        </a>
    @endif
@endauth
   
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="app-cmp-cou">
                    <div class="app-cmp-cou-pro">
                        <b>{{ $course->code }}</b>
                        <b>{{ $course->name }}</b>
                        <br>
                        <p>Course by : {{ $course->expert->name }}</p>
                    </div>
                    <div class="app-cmp-cou-desc">
                        <pre>
                            {{ $course->description }}
                        </pre>
                    </div>
                    @can('register', \App\Models\Course::class)
                    <form action="{{route('courses.register',
                    ['courseCode' =>  $course->code])}}" method="post">
                    @csrf
                    <button type="submit">Register</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </main>
@endsection
