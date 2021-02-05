@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('MUSIC EDIT') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('musics.update')}}">
            @csrf

            <div class="form-group row">
              <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Music Title') }}</label>

              <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ $editMusic->title, old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Artist') }}</label>

              <div class="col-md-6">
                <input id="artist" type="text" class="form-control @error('artist') is-invalid @enderror" name="artist"
                  value="{{ $editMusic->artist, old('artist') }}" required autocomplete="artist">

                @error('artist')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="lyric" class="col-md-4 col-form-label text-md-right">{{ __('lyric') }}</label>

              <div class="col-md-6">
                <textarea name="lyric" id="lyric" class="form-control @error('lyric') is-invalid @enderror"
                  cols="30" rows="10" required autocomplete="lyric" autofocus>{{ $editMusic->lyric, old('lyric') }}</textarea>
              </div>
              @error('lyric')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-light-accent">
                  {{ __('Edit') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection