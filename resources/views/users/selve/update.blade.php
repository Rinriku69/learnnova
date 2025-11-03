@extends('layouts.main', ['title' => $user->name])

@section('content')
    <div class="us-update-main">
        <div class="us-update-cmain">
            <form action="{{ route('users.selves.update') }}" method="POST">
                @csrf
                <label>
                    <b>Email</b>
                    <input type="email" name="email" value="{{ $user->email }}" readonly>
                </label>
                <label>
                    <b>Name</b>
                    <input type="text" name="name" value="{{ $user->name }}">
                </label>
                <label>
                    <b>Role</b>
                    <input type="text" name="role" value="{{ $user->role }}" disabled><br>
                </label>
                <label>
                    <b>Password</b>
                    <input type="text" name="password" value="" placeholder="Leave blank to not update">
                </label><br>
                <button type="submit">Update</button>
                <a href="{{ route('users.selves.view') }}">
                    Cancel
                </a>
            </form> 
        </div>
    </div>
@endsection
