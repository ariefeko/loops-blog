@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <table class="table table-borderless table-condensed table-hover">
            <tr>
                <td class="header">Name</td><td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td class="header">Email</td><td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td class="header">Post Title</td>
                <td>
                    <ul>
                        @foreach ($user->posts as $p)
                            <li>
                                <a href="/post/{{ $p->id }}">{{ $p->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    </div>
@endsection