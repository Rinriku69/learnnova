@extends('layouts.main',[
    'title' => 'Student List'
])

@section('content')
<table class="app-cmp-data-list">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
             
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $user)
                <tr>
                    <td>
                        <a
                            href="{{route('users.view',['userID'=>$user->id])}}">
                            {{ $user->email }}
                        </a>
                    </td>
                    <td>{{ $user->name }}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection