@extends('layouts.main', [
    'title' => 'Courses',
])

@section('header')
    <search>
        <form action="{{ route('courses.list') }}" method="GET" class="app-cmp-search-form">
            <div class="clist-search-group" style="position: relative;">
                <label for="app-inp-search-term">Search</label>
                @livewire('search-courses', ['searchTerm' => $criteria['term'] ?? ''])
                <button type="submit" class="primary">Search</button>
                <a href="{{ route('courses.list') }}">
                    Clear
                </a>
            </div>
        </form>
    </search>
@endsection

@section('content')
    @php
        session()->put('bookmarks.courses.view', url()->full());
        session()->put('bookmarks.courses.createForm', url()->full());
        session()->put('bookmarks.courses.updateForm', url()->full());
    @endphp
    <main class="clist-main">
        <div class="clist-container">
            <div class="clist-wrapper">
                @foreach ($courses as $course)
                    <div class="clist-inf-course">
                        <b>{{ $course->code }} {{ $course->name }}</b>
                        <div class="clist-img">
                            <img src="{{ asset('img/course/' . $course->img) }}" alt="{{ $course->name }}">
                        </div>
                        <h4>⭐️
                            :{{ number_format($course->reviews_avg_rating, 2) ?? 'No review' }}({{ $course->reviews_count }})
                        </h4>
                        <a href="{{ route('courses.view', ['courseCode' => $course->code]) }}">View Course</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="page-link">
            {{ $courses->withQueryString()->links() }}
        </div>
    </main>
@endsection
