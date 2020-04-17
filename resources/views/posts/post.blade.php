@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-bottom: 20px">
            <h1>Post List</h1>
            <a href="{{ route('post-create') }}" class="btn btn-info">Create New</a>
            <hr>
            @include('partials.flash-message')
        </div>
        

        <table class="table datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ $p->user->email }}</td>
                        <td><a href="/post/{{ $p->id }}" title="">{{ $p->title }}</a></td>
                        <td>{{ $p->slug }}</td>
                        <td></td>
                        <td></td>
                        {{-- <td><a href="#" class="btn btn-primary">Edit</a></td> --}}
                        {{-- <td><a href="#" class="btn btn-primary">Delete</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('posts.partials.table')
@endsection