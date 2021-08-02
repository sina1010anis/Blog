<?php


namespace App\Repository\DB\Comment;


use App\Models\Comment;
use App\Repository\DB\Comment\InterfaceFile\LikeCommentInterface;
use Illuminate\Support\Facades\Cookie;

class LikeComment implements LikeCommentInterface
{
    private $status = false;
    private $id;
    public function __construct($id)
    {

        $this->id = $id;
    }
    public function increment()
    {
        if ($this->status)
        {
            Cookie::queue('TEX'.$this->id ,'like comment '.$this->id ,99999999);
            return Comment::whereId($this->id)->increment('like');
        }else
        {
            return 'ERR';
        }
    }
    public function check()
    {
        if (!Cookie::has('TEX'.$this->id )){
            $this->status = true;
        }else{
            $this->status = false;
        }
    }
}
