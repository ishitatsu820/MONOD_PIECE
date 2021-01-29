@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('MUSIC Detail') }}</div>
                <div class="card-body">
                    <h1>{{ $music->title }}</h1>
                    <p>{{ $music->artist }}</p>
                    <p>{{ $music->lyric }}</p>
                    <p>{{ $music->id }}</p>
                    <div id="app-comment">
                        <comment-component :id="{{ $music->id }}"></comment-component>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
          <div class="card">
          <img class="card-img-top " src="{{ asset('icon/user-regular.svg') }}" alt="Card image cap">
            <div class="card-body">
              <h5>{{ __('USER NAME')}}</h2>
            </div>
          </div>
    </div>
</div>

@endsection
