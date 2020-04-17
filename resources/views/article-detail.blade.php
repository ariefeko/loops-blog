@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1><br>
        <hr>
        <p>Created by: {{ $post->user->name }}<br>
        Date created: {{ $post->created_at->diffForHumans() }}</p>
        <p>{!! $post->content !!}</p><hr>
        <h3>Put Your Comments Here:</h3>
        <form method="POST" action="{{ route('front-comment') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-8">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('email') }}</label>
                <div class="col-md-8">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="website" class="col-md-2 col-form-label text-md-right">{{ __('Website') }}</label>
                <div class="col-md-8">
                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="comment" class="col-md-2 col-form-label text-md-right">{{ __('Comment') }}</label>
                <div class="col-md-8">
                    <textarea class="form-control" id="comment" name="comment" rows="4" cols="50" required></textarea>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
