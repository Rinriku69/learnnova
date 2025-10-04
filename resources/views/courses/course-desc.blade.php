@extends('layouts.main', [
    'title' => 'description',
])

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="app-cmp-cou">
                    <div class="app-cmp-cou-pro">
                        <b>name</b>
                    </div>
                    <div class="app-cmp-cou-desc">
                        <pre>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Nisi quaerat aperiam, asperiores dolorem cupiditate temporibus! 
                            Eius voluptate mollitia voluptatem repellat.
                        </pre>
                    </div>
                    <button type="submit">Register</button>
                </div>
            </div>
        </div>
    </main>
@endsection
