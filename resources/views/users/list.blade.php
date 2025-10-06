@extends('layouts.main',['title'=> 'User list'])



@section('content')
<table class="app-cmp-data-list">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
{{--             @php
                session()->put('bookmarks.products.view', url()->full());
                session()->put('bookmarks.categories.view',url()->full());
            @endphp --}}
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a
                            href="{{route('users.view',['userID'=>$user->id])}}">
                            {{ $user->email }}
                        </a>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection