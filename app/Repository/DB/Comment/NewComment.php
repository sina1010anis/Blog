<?php


namespace App\Repository\DB\Comment;


use App\Models\Comment;
use App\Repository\DB\Comment\InterfaceFile\NewCommentInterface;
use App\Repository\DB\Comment\InterfaceFile\setModelComment;
use App\Repository\Tools\BackReturn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewComment extends BackReturn implements NewCommentInterface
{
    protected $comment;
    public function __construct()
    {
        $this->comment = new Comment();
    }
    public function setData($id , Request $request)
    {
        $this->comment->new_item = $id;
        $this->comment->name = $request->name;
        $this->comment->sur_name = $request->sur_name;
        $this->comment->email = $request->email;
        $this->comment->websit = $request->url;
        $this->comment->title = $request->title;
        $this->comment->body = $request->comment;
        return $this;
    }

    public function saveData()
    {
        $this->comment->save();
        return $this;
    }
}
