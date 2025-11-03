<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Noto+Sans+Thai:wght@400;600&display=swap"
        type="text/css" rel="stylesheet">
    <title>{{ $title ?? 'Learnnova' }}</title>
    @livewireStyles
</head>

<body id="layout-body">
    <header class="layout-header">
      
        <div class="layout-header-contain">
            <h2>Learnnova</h2>
            <nav class="layout-link-panel">
                <ul>
                    <li><a href="{{ route('home.main') }}">Home</a></li>
                    <li><a href="{{ route('courses.list') }}">Courses</a></li>
                    @auth
                        @can('ExpertCourseList', \App\Models\Course::class)
                            <li><a href="{{ route('courses.myCourse.elist') }}">My Courses & Manage</a></li>
                        @endcan
                        @can('StudentCourseList', \App\Models\Course::class)
                            <li><a href="{{ route('courses.myCourse.slist') }}">My Courses</a></li>
                        @endcan
                        @can('list', \App\Models\User::class)
                            <li><a href="{{ route('users.list') }}">User</a></li>
                        @endcan
                    @endauth
                    <li><a href="{{ route('home.about.main') }}">{{-- <img src="{{ asset('img/logo_icon/interrogation.png') }}"> --}} About</a></li>
                </ul>
            </nav>
            <nav class="layout-user-panel">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a href="{{ route('users.selves.view') }}">
                            <span>{{ \Auth::user()->name }}</span></a>
                        <button type="submit">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}">
                        <span>Login</span></a>
                @endguest
            </nav>
        </div>
    </header>

    <main class="layout-main">
        <header>
            @yield('header')
            <div class="notification">
                @session('status')
                    <div role="status" class="alert-message">
                        <b>{{ $value }}</b>
                    </div>
                @endsession
                @error('alert')
                    <div role="alert" class="alert-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </header>
        @yield('content')
        @php
            if (!Route::is('users.selves.*')) {
                session()->put('bookmarks.users.selves.view', url()->full());
            }
        @endphp
    </main>

    <footer class="layout-footer">
        <div class="layout-fcontain">
            <nav class="layout-fnav">
                <nav class="layout-f-nlink">
                    <h3>Learnnova</h3>
                    <p>
                        Transforming lives through accessible, high-quality education.
                    </p>
                </nav>
                <nav class="layout-f-nlink">
                    <h4>Platform</h4>
                    <ul>
                        <li><a href="{{ route('courses.list') }}">Browse Courses</a></li>
                        <li><a href="{{ route('courses.list') }}">Become Instructor</a></li>
                        <li><a href="{{ route('home.about.main') }}">Enterprise</a></li>
                    </ul>
                </nav>
                <nav class="layout-f-nlink">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('home.about.main') }}">Help Center</a></li>
                        <li><a href="{{ route('home.about.main') }}">Contact Us</a></li>
                        <li><a href="{{ route('home.about.main') }}">FAQ</a></li>
                    </ul>
                </nav>
                <nav class="layout-f-nlink">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </nav>
            </nav>
            <nav class="layout-f-detai">
                <p>&copy; 2025 Learnnova. All rights reserved.</p>
            </nav>
        </div>
    </footer>
    @livewireScripts
</body>

</html>
