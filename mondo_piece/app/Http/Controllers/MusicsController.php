<?php

namespace MONDO_PIECE\Http\Controllers;


use MONDO_PIECE\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class MusicsController extends Controller
{
    //TOP画面
    public function top(){
        return view('top');
    }
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
    public function GetList() {
        $musicList = Music::orderBy('id', 'desc')->get();
        // Log::debug($musicList);
        return json_encode($musicList, JSON_UNESCAPED_UNICODE);
    }
    public function ShowMusic($id) {
        if(!ctype_digit($id)){
            return redirect('/music')->with('flash_message', __('Invalid operation was performed.'));
        }
        $music = Music::find($id);
        return view('musics.ShowMuisc', compact('music'));
    }
    public function edit($id) 
    {
        if(!ctype_digit($id)){
            return redirect('/music')->with('flash_message', __('Invalid operation was performed.'));
        }
        $editMusic = Music::find($id);
        
        return view('musics.editMusic', compact('edit'));
    }
    public function update(Request $request, $id) 
    {
        
        $editMusic = Music::find($id);
        $editMusic->title = $request->title;
        $editMusic->artist = $request->artist;
        $editMusic->lyric = $request->lyric;
        $editMusic->save();
    
        return redirect('/mypage')->with('flash_message', __('Updated MusicData.'));
    }
}
