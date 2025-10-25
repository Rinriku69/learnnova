@extends('layouts.main',['title'=> 'User list'])

@section('header')
    <search>
        <form action="{{ route('users.list') }}" method="get" class="app-cmp-search-form">
            <div>
                <label>Search</label>
                <input type="text" name="term" value="{{ $criteria['term'] }}" />
            <button type="submit" class="primary">Search</button>
            <a href="{{ route('users.list') }}">
                <button type="button" class="accent">
                    Clear
                </button>
            </a>
            </div>
        </form>
    </search>
    <div class="app-cmp-links-bar">
        {{ $users->withQueryString()->links() }}
    </div>
@endsection

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

            @foreach ($users as $user)
                <tr>
                    <td>
                        <a
                            href="{{route('users.view',[ 'userID'=>$user->id, ])}}">
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