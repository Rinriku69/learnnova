@extends('layouts.main',
['title' => $user->name])

@section('content')
    <form action="{{route('users.selves.update',
    ['userID'=>$user->id])}}" method="POST">
        @csrf
        <label >
            <b>Email</b>
            <input type="email" name="email"  value="{{$user->email}}" readonly >
        </label><br>
        <label >
            <b>Name</b>
            <input type="text" name="name"  value="{{$user->name}}">
        </label><br>
        
        <label>
            <b>Role</b>
            
            <input type="text" name="role"  value="{{$user->role}}" disabled ><br>
           
        <label >
            <b>Password</b>
            <input type="text" name="password"  value="" placeholder="Leave blank to not update">
        </label><br>
        
        <button type="submit">Update</button>
        <a href="{{ route('users.selves.view')}}">
            <button type="button">Cancel</button>
        </a>
    </form>
@endsection