<?php


namespace App\Repository\DB\Admin\Comment\CommentInterface;


interface EditStatusCommentInterface
{
    public function getComment($id);
    public function checkComment();
}
