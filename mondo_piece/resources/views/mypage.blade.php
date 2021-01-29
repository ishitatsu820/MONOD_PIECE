@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header text-center">{{ __('MY DATA') }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr><th>{{ __('USER NAME')}}</th><td>{{ $user->name }}</td></tr>             
                        <tr><th>{{ __('age')}}</th><td>{{ $user->age }}</td></tr>             
                        <tr><th>{{ __('plofile')}}</th><td>{{ $user->profile }}</td></tr>             
                        <tr><th>{{ __('anthem')}}</th><td>{{ $user->anthem }}</td></tr>             
                        <tr><th>{{ __('id')}}</th><td>{{ $user->id }}</td></tr>             
                    </table>
                    <a href="{{ route('mypage.edit', $user->id)}}"><button class="btn btn-light-accent">{{ __('EDIT USER')}}</button></a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header text-center">{{ __('POST LIST') }}</div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach($musics as $music)
                            <div class="list-group-item list-group-item-action">
                                <div class="row">                               
                                    <a class="col-10" href="/music/{{ $music->id }}" >
                                    <div class="d-flex w-100 flex-column">
                                        <h5 class="mb-1">{{ $music->title }}</h5>
                                        <small>{{ $music->updated_at }}</small>
                                    </div>
                                    <p class="mb-1">{{ $music->lyric }}</p>
                                    <small>{{ $music->artist }}</small>
                                    </a>
                                    <div class="col-2">
                                        <a href="#"><img src="{{ asset('/icon/edit-regular.svg')}}" alt="" ></a>
                                        <a href="#"><img src="{{ asset('/icon/trash-alt-regular.svg')}}" alt="" ></a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        @endforeach

                    
                    </div>
                    
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header text-center">{{ __('COMMENT LIST') }}</div>
                <div class="card-body">
                    @foreach($comments as $comment)
                        <a href="/music/{{ $comment->post_id }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 flex-column">
                                <div class="mb-1 font-weight-bold">{{ $comment->comment }}</div>
                                <small>　-{{ $comment->user_idｓ }}</small>
                            </div>  
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
