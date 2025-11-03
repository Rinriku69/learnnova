@extends('layouts.main', ['title' => 'User list'])

@section('header')
    <div class="mc-header">
        <search>
            <form action="{{ route('users.list') }}" method="get" class="app-cmp-search-form">
                <div class="clist-search-group">
                    <label>Search</label>
                    <input type="text" name="term" value="{{ $criteria['term'] }}" />
                    <button type="submit" class="primary">Search</button>
                    <a href="{{ route('users.list') }}">
                        Clear
                    </a>
                </div>
            </form>
        </search>
        
    </div>
@endsection

@section('content')
    <div class="uslist">
        <table class="user-data-list">
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
                            <a href="{{ route('users.view', ['userID' => $user->id]) }}">
                                {{ $user->email }}
                            </a>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
