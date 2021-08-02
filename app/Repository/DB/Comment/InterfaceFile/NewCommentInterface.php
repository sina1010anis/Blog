<?php


namespace App\Repository\DB\Comment\InterfaceFile;


use Illuminate\Http\Request;

interface NewCommentInterface
{
    public function setData($id , Request $request);
    public function saveData();
}
