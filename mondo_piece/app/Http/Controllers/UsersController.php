<?php

namespace MONDO_PIECE\Http\Controllers;

use MONDO_PIECE\User;
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
    public function edit()
    {
        
        $user = Auth::user();
        
            return view('userEdit', compact('user'));
        
    }
    public function update(Request $request, $id){

        Log::debug($request);
        
        if(!ctype_digit($id)){
            return redirect('/mypage')->with('flash_message', __('Invalid operation was performed.'));
        }
        $user = User::find($id);
        Log::debug($user);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->profile = $request->profile;
        $user->anthem = $request->anthem;
        $user->save();
        
        return redirect('/mypage')->with('flash_message', __('Updated UserData.'));
    }
}
