
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{ $title ?? 'E-Learning' }}</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home.main') }}">Home</a></li>
                <li><a href="{{ route('courses.course-info') }}">Courses</a></li>
                <li><a href="{{ route('my-courses.my-courses') }}">My Courses</a></li>
                <li><a href="{{ route('manage.manage') }}">Manage</a></li>
            </ul>
        </nav>
        <div class="user-actions">
           
        </div>
    </header>

    <main>
        @yield('content')



    </main>

    <footer>
        Part of Project
    </footer>



</body>

</html>
