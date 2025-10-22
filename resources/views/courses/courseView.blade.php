@extends('layouts.main', [
    'title' => 'description',
])


@section('header')
    @auth
        @if ($course->expert->id === \Auth::user()->id)
            <a href="{{ route('courses.updateForm', [
                'courseCode' => $course->code,
            ]) }}">
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

                    @php
                        $reviewCount = $course->reviews?->count() ?? 0;
                        $averageRating = $course->reviews?->avg('rating') ?? 0;
                    @endphp

                    <div class="review-summary">
                        <h2>Review</h2>
                        @if ($reviewCount > 0)
                            <h4>Avg: ⭐️ {{ number_format($averageRating, 2) }} / 5.00 (From {{ $reviewCount }}
                                Reviews)</h4>
                        @else
                            <p>Doesn't have review right now.</p>
                        @endif
                    </div>
                    
                    @can('register', $course)
                    <form action="{{route('courses.register',
                    ['courseCode' =>  $course->code])}}" method="post">
                    @csrf
                    <button type="submit">Register</button>
                    </form>
                    @else
                     @if (\Auth::user()->role === 'USER')
                         <p>You have already enrolled in this course</p>
                     @endif
                     
                    @endcan
                </div>
            </div>
        </div>
    </main>
@endsection
