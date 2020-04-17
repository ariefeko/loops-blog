@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Article List</h1>
        <hr>
        @foreach ($posts as $post)
            <p>
                <a href="/article/{{ $post->id }}">{{ $post->title }}</a><br>
                Created by: {{ $post->user->name }}<br>
                Date created: {{ $post->created_at->diffForHumans() }}
            </p>
            <p>{!! str_limit($post->content, 200, '...') !!}</p>
            <p>
                @if (count($post->comments))
                    {{ count($post->comments) }} Comments
                @endif
            </p>
            <hr>
        @endforeach
    </div>
@endsection
