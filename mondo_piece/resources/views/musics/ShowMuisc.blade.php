@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MUSIC Detail') }}</div>
                <div class="card-body">
                    <h1>{{ $music->title }}</h1>
                    <p>{{ $music->artist }}</p>
                    <p>{{ $music->lyric }}</p>
                    <p>{{ $music->id }}</p>
                    <div id="app-comment">
                        <comment-component :id="12"></comment-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
