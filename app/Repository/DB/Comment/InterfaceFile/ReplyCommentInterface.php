<?php


namespace App\Repository\DB\Comment\InterfaceFile;


use Illuminate\Http\Request;

interface ReplyCommentInterface
{
    public function setData(Request $request);
    public function saveData();
    public function sendMessage();
}
