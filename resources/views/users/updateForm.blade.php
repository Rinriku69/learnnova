@extends('layouts.main', ['title' => $user->name])

@section('content')
    <div class="us-update-main">
        <div class="us-update-cmain">
            <form action="{{ route('users.update', ['userID' => $user->id]) }}" method="POST">
                @csrf
                <label>
                    <b>Email</b>
                    <input type="email" name="email" value="{{ $user->email }}" disabled>
                </label><br>
                <label>
                    <b>Name</b>
                    <input type="text" name="name" value="{{ $user->name }}">
                </label><br>

                <label>
                    <b>Role</b>
                    @if ($user->email !== \Auth::user()->email)
                        <select name="role" id="">
                            <option value="USER" @selected($user->role === 'USER')>
                                USER</option>
                            <option value="EXPERT" @selected($user->role === 'EXPERT')>
                                EXPERT</option>
                            <option value="ADMIN" @selected($user->role === 'ADMIN')>
                                ADMIN</option>
                        </select>
                </label><br>
            @else
                <input type="text" name="role" value="{{ $user->role }}" disabled><br>
                @endif
                <label>
                    <b>Password</b>
                    <input type="text" name="password" value="" placeholder="Leave blank to not update">
                </label><br>
                <button type="submit">Update</button>
                <a href="{{ route('users.view', ['userID' => $user->id]) }}">
                    Cancel
                </a>
            </form>
        </div>
    </div>
@endsection
