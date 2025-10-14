@extends('layouts.main', [
    'title' => 'Home',
])

@section('header')
    <div class="app-cmp-inf-header">
        <div class="bar-vedeo-intro">
            <iframe src="" title="JAVASCRIP" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <span>WELCOME TO LEARNNOVA</span>
        </div>
        <button type="button" class="btn-more">See More...</button>
    </div>
@endsection

@section('content')
    <main>
        <div class="app-cmp-inf">
            <nav class="app-cmp-expcourses">
                <dl class="app-cmp-coursdetail">
                    <nav>
                        <dt><img src="img/logo_icon/FDEV.jpg"></dt>
                        <dd>FULL DEV</dd>
                    </nav>

                    <nav>
                        <dt><img src="img/logo_icon/DS.jpg"></dt>
                        <dd>DATA SCI</dd>
                    </nav>

                    <nav>
                        <dt><img src="img/logo_icon/data_security.jpg"></dt>
                        <dd>DATA SECURITY</dd>
                    </nav>
                </dl>
            </nav>
            <nav class="app-see-courses">
                <a href="">
                    All Course
                </a>
            </nav>
        </div>
    </main>
@endsection
