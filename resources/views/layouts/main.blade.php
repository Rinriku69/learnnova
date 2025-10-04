<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'E-Learning' }}</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home.main') }}">Home</a></li>
                <li><a href="{{ route('courses.course-info') }}">Courses</a></li>
                <li><a href="{{ route('my-courses.my-courses') }}">My Courses</a></li>
                @can('list', \App\Models\User::class)
                    <li><a href="{{ route('users.list') }}">User</a></li>
                @endcan

                <li><a href="{{ route('manage.manage') }}">Manage</a></li>
            </ul>
        </nav>
        <nav class="app-cmp-user-panel">

            @auth

                <form action="{{ route('logout') }}" method="post">

                    @csrf
                    <a href="{{route('users.selves.view')}}">
                        <span>{{ \Auth::user()->name }}</span></a>

                    <button type="submit">Logout</button>

                </form>

            @endauth

        </nav>
        <div class="notification">
            @session('status')
                <div role="status">
                    {{ $value }}
                </div>
            @endsession
        </div>

    </header>

    <main>
        <header>
            @yield('header')
        </header>
        @yield('content')



    </main>

    <footer>
        Part of Project
    </footer>



</body>

</html>
