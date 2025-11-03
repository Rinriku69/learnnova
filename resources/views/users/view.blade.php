@extends('layouts.main', [
    'title' => $user->name,
])

@section('header')
    <nav class="user-vheader">
        <form action="{{ route('users.delete', ['userID' => $user->id]) }}" method="post" id="app-form-delete">
            @csrf
        </form>
        <ul>
            <li>
                <a href="{{ route('users.list') }}">&lt; Back</a>
            </li>
            <li>
                <a href="{{ route('users.updateForm', ['userID' => $user->id]) }}">Update</a>
            </li>
            @can('delete', $user)
                @if ($user->email !== \Auth::user()->email)
                    <li>
                        <button type="submit" form="app-form-delete" class="app-cl-link">Delete</button>
                    </li>
                @endif
            @endcan
        </ul>
    </nav>
@endsection

@section('content')
    @php
        session()->put('bookmarks.products.view-shops', url()->full());
    @endphp
    <main class="us-view-main">
        <dl>
            <dt>Email</dt>
            <dd>{{ $user->email }}</dd>
            <dt>Name</dt>
            <dd>{{ $user->name }}</dd>
            <dt>Role</dt>
            <dd>{{ $user->role }}</dd>
        </dl>
    </main>
@endsection
