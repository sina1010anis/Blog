<?php


namespace App\Repository\DB\Admin\Comment;

use App\Models\Comment;
use \App\Repository\Tools\BackReturn;
use App\Repository\DB\Admin\Comment\CommentInterface\EditStatusCommentInterface;
class EditCommentStatus extends BackReturn implements EditStatusCommentInterface
{
    protected $data;
    protected $status = '';
    public function getComment($id)
    {
        $this->data = Comment::find($id);
        return $this;
    }

    public function checkComment()
    {
        if ($this->data->status == 1)
        {
            $this->data->update(['status' => 0]);
        }else{
            $this->data->update(['status' => 1]);
        }
        return $this;
    }
}
