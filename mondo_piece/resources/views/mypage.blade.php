@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header text-center">{{ __('USER') }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr><th>{{ __('USER NAME')}}</th><td>{{ $user->name }}</td></tr>             
                        <tr><th>{{ __('age')}}</th><td>{{ $user->age }}</td></tr>             
                        <tr><th>{{ __('plofile')}}</th><td>{{ $user->profile }}</td></tr>             
                        <tr><th>{{ __('anthem')}}</th><td>{{ $user->anthem }}</td></tr>             
                    </table>
                    <a href="{{ route('mypage.edit')}}"><button class="btn btn-primary">{{ __('EDIT USER')}}</button></a>
                </div>
            </div>
            <div class="card mb-4">
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
            <div class="card mb-4">
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
