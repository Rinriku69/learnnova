@extends('layouts.main', [
    'title' => 'description',
])


@section('header')
    <div class="c-header">
        <div class="cview-backbutton">
            <a href="{{ session()->get('bookmarks.courses.view', route('courses.list')) }}">&lt;
                Back</a>
            @auth
                @if ($course->expert->id === \Auth::user()->id)
                    <a href="{{ route('courses.updateForm', [
                        'courseCode' => $course->code,
                    ]) }}"
                        class="cview-button">
                        <b>Update Course introduction</b>
                    </a>
                @endif
            @endauth
        </div>
    </div>
@endsection
@section('content')
    <main class="cview-main">
        <div class="cview-container">
            <div class="cview-cou">
                <div class="cview-cou-pro">
                    <b>{{ $course->code }}</b>
                    <b>{{ $course->name }}</b>
                    <br>
                    <p>Course by : {{ $course->expert->name }}</p>
                    @can('visibility', $course)
                        {{$course->visibility}}
                    @endcan
                </div>
                <div class="cview-cou-desc">
                    <pre>
                        {{ $course->description }}
                    </pre>
                </div>
                <div class="cview-review-summary">
                    <h2>Review</h2>
                    @if ($reviewCount > 0)
                        <h4>Avg: ⭐️ {{ number_format($averageRating, 2) }} / 5.00 (From {{ $reviewCount }}
                            Reviews)</h4>
                        @foreach ($reviews as $review)
                            <div>
                                {{ $review->user->name }} : {{number_format($review->rating,2)}}
                                <br>
                                {{ $review->comment }}
                                <br>
                                <i>reviewed at: {{ $review->created_at }}</i>
                                <br>
                                <br>
                            </div>
                        @endforeach
                    @else
                        <p>Doesn't have review right now.</p>
                    @endif
                </div>
                <div class="cview-register">
                    @auth
                        @can('register', $course)
                            <form action="{{ route('courses.register', ['courseCode' => $course->code]) }}" method="post">
                                @csrf
                                <button type="submit">Register</button>
                            </form>
                        @else
                            @if (\Auth::user()->role === 'USER')
                                <p>You have already enrolled in this course.</p>
                            @endif
                        @endcan
                    @endauth

                </div>
            </div>
        </div>
    </main>
@endsection
