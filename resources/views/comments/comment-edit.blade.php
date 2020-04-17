@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-9 offset-md-2">
            <h1>Post Edit</h1>
            <hr>
            @include('partials.flash-message')
        </div>

        <form method="POST" action="{{ route('comment-update', ['id' => $comment->id]) }}">
            @csrf

            <div class="form-group row">
                <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>
                <div class="col-md-6">
                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ $comment->website }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                <div class="col-md-6">
                    <textarea class="form-control @error('comment') is-invalid @enderror description" id="comment" name="comment" rows="5">{{ $comment->comment }}</textarea>
                    {{-- <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ $comment->comment }}"> --}}
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection