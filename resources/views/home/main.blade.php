@extends('layouts.main', [
    'title' => 'Home',
])

@section('content')
@php
    session()->put('bookmarks.courses.view', url()->full());
@endphp
    <div class="home-header">
        <div class="home-htext">
            <h1>
                Learn Today, Lead Tomorrow
            </h1>
            <p>
                Unlock your potential with Learnnova. Access world-class courses,
                learn at your own pace, and achieve your goals with our expert-
                led programs.
            </p>
            <div class="home-buttons">
                <a href="{{ route('courses.list') }}">
                    Explore Courses
                </a>
                <a href="{{ route('home.about.main') }}">
                    Learn More
                </a>
            </div>
        </div>
        <div class="home-image">
            <img src="img/img_anouther/Learning.png" alt="" />
        </div>
    </div>
    <div class="home-intro">
        <ul>
            <li>
                <p>50K+</p>
                <p>Active Students</p>
            </li>
            <li>
                <p>200+</p>
                <p>Quality Courses</p>
            </li>
            <li>
                <p>100+</p>
                <p>Expert Instructors</p>
            </li>
            <li>
                <p>95%</p>
                <p>Success Rate</p>
            </li>
        </ul>
    </div>
    <div class="home-inf">
        <div class="home-infspan">
            <span>
                <h2>Learn essential career and life skills</h2>
                Learnnova helps you build in-demand skills fast and
                advance your career in a changing job market.
            </span>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="img/course/japanese.png">
                <div class="card-content">
                    <h3>Japanese</h3>
                    <a href="{{ route('courses.view', ['courseCode' => 'J101']) }}">Read More...</a>
                </div>
            </div>
            <div class="card">
                <img src="img/course/thaiL.jpg">
                <div class="card-content">
                    <h3>Thai Language</h3>
                    <a href="{{ route('courses.view', ['courseCode' => 'TH0019']) }}">Read More...</a>
                </div>
            </div>
            <div class="card">
                <img src="img/course/animalVoting.jpg">
                <div class="card-content">
                    <h3>Animal</h3>
                    <a href="{{ route('courses.view', ['courseCode' => '511781']) }}">Read More...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="home-whychoose">
        <div class="home-why">
            <h2>Why Choose Learnnova?</h2>
            <p>
                We provide everything you need to succeed in your learning journey
            </p>
        </div>
        <div class="post-cards">
            <div class="pcard">
                <div class="pcard-content">
                    <h3>Expert-Led Courses</h3>
                    <p>
                        Learn from industry professionals with years of experience.
                    </p>
                </div>
            </div>
            <div class="pcard">
                <div class="pcard-content">
                    <h3>Community Learning</h3>
                    <p>
                        Join thousands of learners worldwide in your journey.
                    </p>
                </div>
            </div>
            <div class="pcard">
                <div class="pcard-content">
                    <h3>Certified Programs</h3>
                    <p>
                        Earn certificates recognized by top companies.
                    </p>
                </div>
            </div>
            <div class="pcard">
                <div class="pcard-content">
                    <h3>Career Growth</h3>
                    <p>
                        Advance your career with in-demand skills.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-joinus">
        <h2>Ready to Start Learning?</h2>
        <p>
            Join thousands of students already learning on Learnnova.
            Start your journey today and unlock endless possibilities.
        </p>
        <a href="{{ route('courses.list') }}" class="home-joinus-button">
            Browse All Courses
        </a>
    </div>
@endsection
