@extends('layouts.main', [
    'title' => 'My Profile',
])

@section('header')
    <nav class="user-header">
        <ul>
            <li>
                <a href="{{ session()->get('bookmarks.users.selves.view', route('home.main')) }}">&lt; Back</a>
            </li>
            <li>
                <a href="{{ route('users.selves.updateForm') }}">Update</a>
            </li>
        </ul>
    </nav>
@endsection

@section('content')
    <div class="user-main">
        <div class="user-contmain">
            <img src="{{ asset('img/user/' . $user->img) }}" alt="Yes">
            <dl>
                <dt>Email</dt>
                <dd>{{ $user->email }}</dd>
                <dt>Name</dt>
                <dd>{{ $user->name }}</dd>
                <dt>Role</dt>
                <dd>{{ $user->role }}</dd>
            </dl>
        </div>
    </div>
@endsection
