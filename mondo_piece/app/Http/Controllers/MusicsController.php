<?php

namespace MONDO_PIECE\Http\Controllers;


use MONDO_PIECE\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MusicsController extends Controller
{
    //曲新規登録画面表示
    public function new()
    {
        return view('musics.new');
    }
    //曲新規登録処理
    public function create(Request $request)
    {
        $music = new Music;
        
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->lyric = $request->lyric;
        $music->user_id = Auth::id();

        $music->save();
    }
}
