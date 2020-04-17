@extends('layouts.app')

@section('content')
    <div class="container">
        
        
        <div class="col-md-9 offset-md-2">
            <h1>Post Create</h1>
            <hr>
            @include('partials.flash-message')
        </div>

        <form method="POST" action="{{ route('post-store') }}">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autofocus>
                </div>
            </div>

            {{-- <div class="form-group row">
                <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>
                <div class="col-md-6">
                    <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" readonly>
                </div>
            </div> --}}

            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>
                <div class="col-md-6">
                    <textarea class="form-control @error('content') is-invalid @enderror description" id="content" name="content" rows="5"></textarea>
                    {{-- <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" required> --}}
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    @include('posts.partials.scripts')
@endsection