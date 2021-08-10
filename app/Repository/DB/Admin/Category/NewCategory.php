<?php


namespace App\Repository\DB\Admin\Category;


use App\Models\Category;
use App\Repository\DB\Admin\Menu\MenuInterface\NewMenuInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class NewCategory extends BackReturn implements NewMenuInterface
{
    private $request;
    private $category;
    protected $id;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function setRequest(Request $request, $id)
    {
        $this->request = $request;
        $this->id = $id;
        return $this;
    }

    public function setData()
    {
        $this->category->blog_id = $this->id;
        $this->category->title = $this->request->name;
        return $this;
    }

    public function saveData()
    {
        $this->category->save();
        return $this;
    }
}
