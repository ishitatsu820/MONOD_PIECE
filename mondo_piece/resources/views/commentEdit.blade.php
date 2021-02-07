@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('COMMENT EDIT') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('comment.update', $editComment->id)}}">
            @csrf
            <div class="form-group row">
              <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('COMMENT') }}</label>

              <div class="col-md-6">
                <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment"
                  value="{{ $editComment->comment, old('comment') }}" required autocomplete="comment">

                @error('comment')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
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
</div>

@endsection