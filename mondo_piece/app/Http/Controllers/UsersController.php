<?php

namespace MONDO_PIECE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        $musics = Auth::user()->musics()->get();
        $comments = Auth::user()->comments()->get();
        Log::debug($comments);
        return view('mypage', compact('user', 'musics', 'comments'));
    }
    
}
