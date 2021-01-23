@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('USER') }}</div>
                <div class="card-body">
                  <p>{{ $user->name }}</p>
                  <p>{{ $user->age }}</p>
                  <p>{{ $user->plofile }}</p>
                  <p>{{ $user->anthem }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">{{ __('POST LIST') }}</div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach($musics as $music)
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 flex-column">
                                    <div class="mb-1 font-weight-bold">{{ $music->title }}</div>
                                    <small>　-{{ $music->artist }}</small>
                                </div>  
                            </div>
                        @endforeach
                    
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center">{{ __('COMMENT LIST') }}</div>
                <div class="card-body">
                    @foreach($comments as $comment)
                        <p>{{$comment->comment}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
