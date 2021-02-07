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
    $commentList = Comment::select('comments.id', 'comments.comment', 'comments.updated_at', 'users.name')->leftJoin('users', 'users.id', '=', 'comments.user_id')->where('post_id', $post_id)->get();
    return json_encode($commentList, JSON_UNESCAPED_UNICODE);
  }
  public function edit($id)
  {
    if (!ctype_digit($id)) {
      return redirect('/music')->with('flash_message', __('Invalid operation was performed.'));
    }
    $editComment = Comment::find($id);
    Log::debug($editComment);
    return view('commentEdit', compact('editComment'));
  }
  public function update(Request $request, $id)
  {
    if (!ctype_digit($id)) {
      return redirect('/music')->with('flash_message', __('Invalid operation was performed.'));
    }
    $updateComment = Comment::find($id);
    $updateComment->comment = $request->comment;
    $updateComment->save();
    return redirect('/mypage')->with('flash_message', __('Updated comment.'));
  }
  public function delete($id)
  {
    if (!ctype_digit($id)) {
      return redirect('/music')->with('flash_message', __('Invalid operation was performed.'));
    }
    Comment::find($id)->delete();
    return redirect('/mypage')->with('flash_message', __('Deleted MusicData.'));
  }
}
