@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center">{{ __('MUSICS') }}</div>
                <div class="card-body">
                  <div id="app-music">
                    <music-app-component></music-app-component>
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
  
</div>

@endsection
