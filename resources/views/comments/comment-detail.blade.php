@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comment Details</h1>
        <table class="table table-borderless table-condensed table-hover">
            <tr>
                <td class="header">Post Title</td><td><a href="/post/{{ $comment->post->id }}">{{ $comment->post->title }}</a></td>
            </tr>
            <tr>
                <td class="header">Name</td><td>{{ $comment->name }}</td>
            </tr>
            <tr>
                <td class="header">Email</td><td>{{ $comment->email }}</td>
            </tr>
            <tr>
                <td class="header">Website</td><td>{{ $comment->website }}</td>
            </tr>
            <tr>
                <td class="header">Comment</td><td>{!! $comment->comment !!}</td>
            </tr>
        </table>
    </div>
@endsection