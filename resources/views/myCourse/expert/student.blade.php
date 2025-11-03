@extends('layouts.main', [
    'title' => 'Student List',
])
@section('header')
    <div class="c-header">
        <div class="cview-backbutton">
            <a href="{{ session()->get('bookmarks.courses.student', route('courses.myCourse.elist')) }}">&lt;
                Back</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="smycourse-data">
        <table class="smycourse-data-list">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $user)
                    <tr>
                        <td>
                            <a href="{{ route('users.view', ['userID' => $user->id]) }}">
                                {{ $user->email }}
                            </a>
                        </td>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
