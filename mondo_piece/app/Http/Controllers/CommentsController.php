<?php

namespace MONDO_PIECE\Http\Controllers;

use MONDO_PIECE\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(Request $request){
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();

        $comment->save();
        
    }
}
