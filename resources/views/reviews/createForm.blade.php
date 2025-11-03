@extends('layouts.main', [
    'title' => 'Review Form',
])

@section('content')
    <div class="review-main">
        <h1>Write review for : {{ $course->name }}</h1>
        <p class="lead">You are reviewing the course you have registered for. Please provide an honest rating.</p>
        <form method="POST" action="{{ route('courses.reviews.store', ['courseCode' => $course->code]) }}">
            @csrf
            <div class="rform-group">
                <label for="rating">Point (1-5 stars):</label>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="">Give your rating stars</option>
                    <option value="5">5 stars</option>
                    <option value="4">4 stars</option>
                    <option value="3">3 stars</option>
                    <option value="2">2 stars</option>
                    <option value="1">1 stars</option>
                </select>
            </div>
            <div class="rform-group-comment">
                <label for="comment">Comments:</label>
                <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit review</button>
            <a href="{{ route('courses.content', ['courseCode' => $course->code]) }}"
                class="btn btn-secondary mt-4">Cancel</a>
        </form>
    </div>
@endsection
