<?php


namespace App\Repository\DB\Comment;


use App\Repository\DB\Comment\InterfaceFile\ReplyCommentInterface;
use Illuminate\Http\Request;

class ReplyComment implements ReplyCommentInterface
{
    /**
     * @var \App\Models\ReplyComment
     */
    private $replyComment;

    public function __construct(\App\Models\ReplyComment $replyComment)
    {
        $this->replyComment = $replyComment;
    }

    public function setData(Request $request)
    {
        $this->replyComment->comment_id = $request->id;
        $this->replyComment->name = $request->name;
        $this->replyComment->title = '-';
        $this->replyComment->body = $request->text;
        return $this;
    }

    public function saveData()
    {
        $this->replyComment->save();
        return $this;
    }

    public function sendMessage()
    {
        return 'ok';
    }
}
