<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class ReviewController extends Controller
{
    function create(string $courseCode): View|RedirectResponse
    {

        $course = Course::where('code', $courseCode)->firstOrFail();
        Gate::authorize('courseReview',$course);
        $userId = Auth::user()->id;
        $existingReview = $course->reviews()->where('user_id', $userId)->first();

        if ($existingReview) {
            return redirect()->route('reviews.edit', ['review' => $existingReview])
                ->with('status', 'You have already reviewed this course. Please use the edit form to update it.');
        }

        return view('reviews.createForm', ['course' => $course]);
    }

    function store(ServerRequestInterface $request, string $courseCode): RedirectResponse
    {
        $course = Course::where('code', $courseCode)->firstOrFail();
        $data = $request->getParsedBody();
        Gate::authorize('courseReview',$course);
        $userId = Auth::user()->id;
        if ($course->reviews()->where('user_id', $userId)->exists()) { 
             return back()->with('error', 'You have already reviewed this course. Please use the edit form to update it.');
        }

        $data['user_id'] = $userId;
        $course->reviews()->create($data);

        return redirect()->route('courses.content', ['courseCode' => $course->code])
            ->with('status', 'Thank you for your review.');
    }

    function edit(Review $review): View
    {
        // Gate::authorize('courseCreate', $review);

        return View('reviews.formUpdate', compact('review'));
    }

    function update(ServerRequestInterface $request, Review $review): RedirectResponse
    {
        // Gate::authorize('courseCreate', $review);

        $data = $request->getParsedBody();

        $review->fill($data);
        $review->save();

        return redirect()->route('courses.content', ['courseCode' => $review->course->code])
            ->with('status', 'Review was updated.');
    }

    function destroy(Review $review): RedirectResponse
    {
        // Gate::authorize('courseCreate', $review);

        $course = $review->course;
        $review->delete();

        return redirect()->route('courses.content', ['courseCode' => $course->code])
            ->with('status', 'Review was deleted.');
    }
}
