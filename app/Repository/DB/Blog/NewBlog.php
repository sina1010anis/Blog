<?php


namespace App\Repository\DB\Blog;


use App\Models\Blog;
use App\Repository\DB\Blog\NewBlogInterface\NewBlogInterface;
use App\Repository\DB\Comment\InterfaceFile\NewCommentInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class NewBlog extends BackReturn implements NewBlogInterface
{
    protected $data;
    public function __construct()
    {
        $this->data = new Blog();
    }

    public function setData(Request $request)
    {
        $this->data = new Blog();
        $this->data->domain = $request->domain;
        $this->data->title = $request->title;
        $this->data->dec_min = $request->description;
        $this->data->style = $request->style;
        $this->data->user_id = auth()->user()->id;
        return $this;
    }

    public function saveData()
    {
        $this->data->save();
        return $this;
    }
}
