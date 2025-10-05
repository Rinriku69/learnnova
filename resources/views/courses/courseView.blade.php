@extends('layouts.main', [
    'title' => 'description',
])


@section('header')
    @if ($course->expert->id === \Auth::user()->id)
        <a href="{{route('courses.updateForm',[
        'courseCode' => $course->code])}}">
            <b>Update Course introduction</b>
        </a>
    @endif
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
                    <button type="submit">Register</button>

                    @endcan
                </div>
            </div>
        </div>
    </main>
@endsection
