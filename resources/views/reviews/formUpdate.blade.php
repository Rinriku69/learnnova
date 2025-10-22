@extends('layouts.main', [
    'title' => 'Review',
])

@section('content')
<div class="container">
    <h1>Edit course review: {{ $review->course->name }}</h1>
    

    <form method="POST" action="{{ route('reviews.update', ['review' => $review]) }}">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="rating">point (1-5 stars):</label>
            <select name="rating" id="rating" class="form-control" required>
                @for ($i = 5; $i >= 1; $i--)
                    <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                        {{ $i }} stars
                    </option>
                @endfor
            </select>
        </div>
        
        <div class="form-group mt-3">
            <label for="comment">Content:</label>
            <textarea name="comment" id="comment" rows="5" class="form-control">{{ old('comment', $review->comment) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save review</button>
        <a href="{{ route('courses.view', ['courseCode' => $review->course->code]) }}" class="btn btn-secondary mt-4">Cancel</a>
    </form>

    <hr class="my-5">

    <h2>Delete review</h2>
    <form method="POST" action="{{ route('reviews.destroy', ['review' => $review]) }}">
        @csrf
 
        <button type="submit" class="btn btn-danger">Delete this review</button>
    </form>
</div>
@endsection