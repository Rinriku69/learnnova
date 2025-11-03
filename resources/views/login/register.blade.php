@extends('layouts.main', [
    'title' => 'Register',
])

@section('content')
    <main class="register-page-body">
        <div class="register-container">
            <h1>Register New Account</h1>
            <form action="{{ route('register') }}" method="POST" class="regis-form">
                @csrf
                <div class="regis-form-container">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="regis-button">Register</button>
            </form>
        </div>
    </main>
@endsection
