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
        <div class="app-f-container">
            <nav class="app-f-navlinks">
                <nav class="app-f-nlink">
                    <h3>Learnnova</h3>
                    <p>
                        Transforming lives through accessible, high-quality education.
                    </p>
                </nav>
                <nav class="app-f-nlink">
                    <h4>Platform</h4>
                    <ul>
                        <li><a href="#">Browse Courses</a></li>
                        <li><a href="#">Become Instructor</a></li>
                        <li><a href="#">Enterprise</a></li>
                    </ul>
                </nav>
                <nav class="app-f-nlink">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </nav>
                <nav class="app-f-nlink">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </nav>
            </nav>
            <nav class="app-f-detai">
                <p>&copy; 2025 Learnnova. All rights reserved.</p>
            </nav>
        </div>
    </footer>
</body>

</html>
