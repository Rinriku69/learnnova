<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'Learnnova' }}</title>
</head>

<body id="app-cmp-body">

   <header class="app-cmp-header">
    <div class="app-cmp-header-container">
         <h2>Learnnova</h2>
        <nav class="app-cmp-link-panel">
            <ul>
                <li><a href="{{ route('home.main') }}">Home</a></li>
                <li><a href="{{ route('courses.list') }}">Courses</a></li>
                @auth
                    
              
                @can('ExpertCourseList', \App\Models\Course::class)
                     <li><a href="{{route('courses.myCourse.elist')}}">My Courses & Manage</a></li>
                
                @endcan
                @can('StudentCourseList', \App\Models\Course::class)
                     <li><a href="{{route('courses.myCourse.slist')}}">My Courses</a></li>
                
                @endcan
                
                @can('list', \App\Models\User::class)
                    <li><a href="{{ route('users.list') }}">User</a></li>
                @endcan
                  @endauth

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
      </div>

    </header>
    <main class="app-cmp-main">
        <header>
            @yield('header')
            <div class="notification">
            @session('status')
            <div role="status">
                <b>{{$value}}</b>
            </div>
            @endsession
             </div>
             
        </header>
        @yield('content')
    </main>
    <footer class="app-cmp-footer">
        <h1>Learnnova</h1>
        <nav class="app-f-detai">
            <img src="img/logo_icon/copyright.png" class="imgmains" />
            <span>
                2025 By Learnnova ,Built on
                Max-win Studio.
            </span>
        </nav>
        <ul>
            <li><img src="img/logo_icon/facebook.png" class="imgmain" /></li>
            <li><img src="img/logo_icon/instagram.png" class="imgmain" /></li>
            <li><img src="img/logo_icon/youtube.png" class="imgmain" /></li>
        </ul>
    </footer>
</body>

</html>
