<?php


namespace App\Repository\DB\Comment\InterfaceFile;


use App\Models\Comment;

abstract class setModelComment
{
    protected $comment;
    public function __construct()
    {
        $this->comment = new Comment();
    }
}
