@extends('layouts.main', [
    'title' => 'description',
])

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="app-cmp-cou">
                    <div class="app-cmp-cou-pro">
                        <b>{{ $courses->code }}</b>
                        <b>{{ $courses->name }}</b>
                    </div>
                    <div class="app-cmp-cou-desc">
                        <pre>
                            {{ $courses->description }}
                        </pre>
                    </div>
                    <button type="submit">Register</button>
                </div>
            </div>
        </div>
    </main>
@endsection
