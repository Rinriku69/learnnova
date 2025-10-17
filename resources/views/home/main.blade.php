@extends('layouts.main', [
    'title' => 'Home',
])

@section('header')
    <div class="app-cmp-inf-header">
        <div class="bar-vedeo-intro">
            <span>WELCOME TO LEARNNOVA</span>
        </div>
    </div>
@endsection

@section('content')
    <main>
        <div class="app-cmp-inf">
            <span><b>Learn essential career and life skills</b><br>
                Learnnova helps you build in-demand skills fast and
                advance your career in a changing job market.</span>
            <nav class="group-courses">
                <dl class="app-cmp-coursdetail">
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/FDEV.jpg"></dt>
                        <dd>FULL DEV</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/DS.jpg"></dt>
                        <dd>DATA SCI</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/data_security.jpg"></dt>
                        <dd>DATA SECURITY</dd>
                    </nav>
                </dl>
                <dl class="app-cmp-coursdetail">
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/FDEV.jpg"></dt>
                        <dd>FULL DEV</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/DS.jpg"></dt>
                        <dd>DATA SCI</dd>
                    </nav>
                    <nav class="gcousers">
                        <dt><img src="img/logo_icon/data_security.jpg"></dt>
                        <dd>DATA SECURITY</dd>
                    </nav>
                </dl>
            </nav>
        </div>
    </main>
@endsection