<?php

namespace App\Http\Controllers\Comment;

use App\Events\SetMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewCommentValidate;
use App\Http\Requests\ReplyComment;
use App\Models\Comment;
use App\Repository\DB\Comment\LikeComment;
use App\Repository\DB\Comment\NewComment;
use App\Repository\DB\Comment\NewCommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CommentController extends Controller
{
    private $newComment;
    private $newCommentReply;

    public function __construct(NewComment $newComment , NewCommentReply $newCommentReply)
    {
        $this->newComment = $newComment;
        $this->newCommentReply = $newCommentReply;
    }

    public function new_comment(NewCommentValidate $request , Comment $comment , $dom , $id)
    {
        return $this->newComment->setEmail($request)->setData($id , $request)->saveData()->back('پیام شما اضافه شده بعد از تایید مدیر وبلاگ منتشر میشود');
    }
    public function reply_comment($dom,$id,ReplyComment $request, \App\Models\ReplyComment $comment)
    {
        return $this->newCommentReply->setData($id , $request)->saveData()->back('پیام شما اضافه شده بعد از تایید مدیر وبلاگ منتشر میشود');
    }
    public function like_comment($id)
    {
        $like = new LikeComment($id);
        $like->check();
        return $like->increment();
    }
}
