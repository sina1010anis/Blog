<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewCommentValidate;
use App\Http\Requests\ReplyComment;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function new_comment(NewCommentValidate $request , Comment $comment , $dom , $id)
    {
        $comment->new_item = $id;
        $comment->name = $request->name;
        $comment->sur_name = $request->sur_name;
        $comment->email = $request->email;
        $comment->websit = $request->url;
        $comment->title = $request->title;
        $comment->body = $request->comment;
        $comment->save();
        return back()->with('msg' , 'اضافه شد');
    }
    public function reply_comment($dom,$id,ReplyComment $request, \App\Models\ReplyComment $comment)
    {
        $comment->comment_id = $id;
        $comment->body = $request->comment;
        $comment->name = $request->name;
        $comment->title = '-';
        $comment->save();
        return back()->with('msg' , 'اضافه شد');
    }
}
