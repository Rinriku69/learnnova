@extends('layouts.main', [
    'title' => 'Home',
])

@section('header')
    <div class="app-cmp-inf-header">
        <div class="bar-vedeo-intro">
          
            <span>WELCOME TO LEARNNOVA</span>
        </div>
        <button type="button" class="btn-more">See More...</button>
    </div>
@endsection

@section('content')
    <main>
        <div class="app-cmp-inf">
            <nav class="app-cmp-expcourses">
               
            </nav>
            <nav class="app-see-courses">
                <a href="">
                    All Course
                </a>
            </nav>
        </div>
    </main>
@endsection