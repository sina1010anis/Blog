<?php


namespace App\Repository\DB\Comment;


use App\Models\Comment;
use App\Models\ReplyComment;
use App\Repository\DB\Comment\InterfaceFile\NewCommentInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewCommentReply extends BackReturn implements NewCommentInterface
{
    protected $comment;
    public function __construct()
    {
        $this->comment = new ReplyComment();
    }

    public function setData($id, Request $request)
    {
        $this->comment->comment_id = $id;
        $this->comment->body = $request->comment;
        $this->comment->name = $request->name;
        $this->comment->title = '-';
        return $this;
    }

    public function saveData()
    {
        $this->comment->save();
        return $this;
    }
}
