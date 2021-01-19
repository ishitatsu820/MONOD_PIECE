<?php

namespace MONDO_PIECE\Http\Controllers;


use MONDO_PIECE\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class MusicsController extends Controller
{
    //曲新規登録画面表示
    public function music()
    {
        return view('musics.music');
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
    //曲リスト取得処理
    public function getList() {
        $musicList = Music::all();
        Log::debug($musicList);
        return json_encode($musicList, JSON_UNESCAPED_UNICODE);
    }
}
