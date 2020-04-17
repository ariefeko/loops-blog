@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-bottom: 20px">
            <h1>Guest Comments</h1>
            <hr>
            @include('partials.flash-message')
        </div>

        <table class="table datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Comment</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->website }}</td>
                        <td><a href="/comment/{{ $c->id }}">{{ $c->comment }}</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('comments.partials.table')
@endsection