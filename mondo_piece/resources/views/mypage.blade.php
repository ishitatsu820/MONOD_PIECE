@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-header text-center">{{ __('MY DATA') }}</div>
        <div class="card-body">
          <table class="table">
            <tr>
              <th>{{ __('USER NAME')}}</th>
              <td>{{ $user->name }}</td>
            </tr>
            <tr>
              <th>{{ __('age')}}</th>
              <td>{{ $user->age }}</td>
            </tr>
            <tr>
              <th>{{ __('plofile')}}</th>
              <td>{{ $user->profile }}</td>
            </tr>
            <tr>
              <th>{{ __('anthem')}}</th>
              <td>{{ $user->anthem }}</td>
            </tr>
            <tr>
              <th>{{ __('id')}}</th>
              <td>{{ $user->id }}</td>
            </tr>
          </table>
          <a href="{{ route('mypage.edit')}}"><button class="btn btn-light-accent">{{ __('EDIT USER')}}</button></a>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header text-center">{{ __('MY POST LIST') }}</div>
        <div class="card-body">
          <div class="list-group">
            @foreach($musics as $music)
            <div class="list-group-item list-group-item-action">
              <div class="row">
                <a class="col-11" href="/music/{{ $music->id }}">
                  <div class="d-flex w-100 flex-column">
                    <h5 class="mb-1">{{ $music->title }}</h5>
                    <small>{{ $music->updated_at }}</small>
                  </div>
                  <p class="mb-1">{{ $music->lyric }}</p>
                  <small>{{ $music->artist }}</small>
                </a>
                <div class="col-1 p-0 d-flex flex-column align-items-center">
                  <a href="{{ route('musics.edit', ['id' => $music->id])}}" class="edit-link "><img
                      src="{{ asset('/icon/edit-regular.svg')}}" alt="" class="m-2"></a>
                  <form action="{{ route('musics.delete', $music->id)}}" method="post">
                    @csrf
                    <button class="delete-link" onclick='return confirm("削除しますか？");'></button>
                  </form>
                </div>
              </div>
            </div>
            @endforeach


          </div>

        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header text-center">{{ __('MY COMMENT LIST') }}</div>
        <div class="card-body">
          @foreach($comments as $comment)
          <div class="list-group-item list-group-item-action">
            <div class="row">
              <a class="col-11" href="/music/{{ $music->id }}">
                <div class="d-flex w-100 flex-column">
                  <h5 class="mb-1">{{ $comment->title }}</h5>
                  <small>{{ $comment->updated_at }}</small>
                </div>
                <p class="mb-1">{{ $comment->comment }}</p>
              </a>
              <div class="col-1 p-0 d-flex flex-column align-items-center">
                <a href="{{ route('comment.edit', ['id' => $comment->id])}}" class="edit-link "><img
                    src="{{ asset('/icon/edit-regular.svg')}}" alt="" class="m-2"></a>
                <form action="{{ route('comment.delete', $comment->id)}}" method="post">
                  @csrf
                  <button class="delete-link" onclick='return confirm("削除しますか？");'></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection