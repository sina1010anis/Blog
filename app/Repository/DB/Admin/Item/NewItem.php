<?php


namespace App\Repository\DB\Admin\Item;


use App\Models\NewBlog;
use App\Repository\DB\Admin\Menu\MenuInterface\NewMenuInterface;
use App\Repository\DB\Comment\InterfaceFile\NewCommentInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class NewItem extends BackReturn implements NewCommentInterface
{
    /**
     * @var NewBlog
     */
    private $newBlog;

    public function __construct()
    {
        $this->newBlog = new NewBlog();
    }

    public function setData($id, Request $request)
    {
        $this->newBlog->blog_id = $id;
        $this->newBlog->title =$request->title;
        $this->newBlog->body = $request->body;
        $this->newBlog->key_word = '-';
        $this->newBlog->menu_id = $request->menu_id;
        return $this;
    }

    public function saveData()
    {
        $this->newBlog->save();
        return $this;
    }
}
