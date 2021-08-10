<?php


namespace App\Repository\DB\Admin\Blog;


use App\Models\Blog;
use App\Repository\DB\Admin\Blog\InterfaceFile\EditBlogInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EditBlog extends BackReturn implements EditBlogInterface
{
    public $dom;

    public function __construct(Blog $dom)
    {
        $this->dom = $dom;
    }

    public function setData(Request $request)
    {
        $this->dom->title = $request->title;
        $this->dom->dec_min = $request->dec_min;
        $this->dom->style = $request->style;
        return $this;
    }

    public function saveData()
    {
        $this->dom->save();
        return $this;
    }
}
