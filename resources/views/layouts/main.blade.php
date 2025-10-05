<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'E-Learning' }}</title>
</head>

<body>

    <header class="nav">
        <nav>
            <ul>
                <li><a href="{{ route('home.main') }}">Home</a></li>
                <li><a href="{{ route('courses.list') }}">Courses</a></li>
                @can('mycourse', \App\Models\Course::class)
                    <li><a href="{{route('courses.myCourse.list')}}">My Courses</a></li>
                @endcan
                
                @can('list', \App\Models\User::class)
                    <li><a href="{{ route('users.list') }}">User</a></li>
                @endcan
                

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
            @guest
                <a href="{{route('login')}}">
                        <span>Login</span></a>
            @endguest

        </nav>
      

    </header>

    <main>
        <header>
            @yield('header')
            @session('status')
                <b>{{$value}}</b>
            @endsession
        </header>
        @yield('content')



    </main>

    <footer>
        Part of Project
    </footer>



</body>

</html>
