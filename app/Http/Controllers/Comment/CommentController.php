<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewCommentValidate;
use App\Http\Requests\ReplyComment;
use App\Models\Comment;
use App\Repository\DB\Comment\NewComment;
use App\Repository\DB\Comment\NewCommentReply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $newComment;
    /**
     * @var NewCommentReply
     */
    private $newCommentReply;

    public function __construct(NewComment $newComment , NewCommentReply $newCommentReply)
    {
        $this->newComment = $newComment;
        $this->newCommentReply = $newCommentReply;
    }

    public function new_comment(NewCommentValidate $request , Comment $comment , $dom , $id)
    {
        return $this->newComment->setData($id , $request)->saveData()->back('پیام شما اضافه شده بعد از تایید مدیر وبلاگ منتشر میشود');
        //return back()->with('msg' , 'اضافه شد');
    }
    public function reply_comment($dom,$id,ReplyComment $request, \App\Models\ReplyComment $comment)
    {
        return $this->newCommentReply->setData($id , $request)->saveData()->back('پیام شما اضافه شده بعد از تایید مدیر وبلاگ منتشر میشود');
    }
}
