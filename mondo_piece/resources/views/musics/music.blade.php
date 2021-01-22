@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MUSICS') }}</div>
                <div class="card-body">
                  <div id="app-music">
                    <music-app-component></music-app-component>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
