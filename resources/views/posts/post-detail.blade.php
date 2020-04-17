@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post Details</h1>
        <table class="table table-borderless table-condensed table-hover">
            <tr>
                <td class="header">Name</td><td><a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></td>
            </tr>
            <tr>
                <td class="header">Email</td><td>{{ $post->user->email }}</td>
            </tr>
            <tr>
                <td class="header">Title</td><td>{{ $post->title }}</td>
            </tr>
            <tr>
                <td class="header">Slug</td><td>{{ $post->slug }}</td>
            </tr>
            <tr>
                <td class="header">Content</td><td>{!! $post->content !!}</td>
            </tr>
            <tr>
                <td class="header">Comment</td>
                <td>
                    <ul>
                        @foreach ($post->comments as $c)
                            <li>
                                <a href="/comment/{{ $c->id }}">{{ $c->comment }}</a>
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    </div>
@endsection