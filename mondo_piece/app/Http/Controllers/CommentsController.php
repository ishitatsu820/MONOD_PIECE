<?php

namespace MONDO_PIECE\Http\Controllers;

use MONDO_PIECE\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();
        $comment->save();
        
    }
    public function getList(Request $request)
    {
        $post_id = $request->input('post_id');
        Log::debug($post_id);
        $commentList = Comment::select('id', 'comment', 'updated_at')->where('post_id', $post_id)->get();
        Log::debug($commentList);
        return json_encode($commentList, JSON_UNESCAPED_UNICODE);
    }
}
