<?php


namespace App\Repository\DB\Admin\CategoryItem;


use App\Models\CategoryItem;
use App\Models\MenuItem;
use App\Repository\DB\Admin\Menu\MenuInterface\NewMenuInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class NewItemCategory extends BackReturn implements NewMenuInterface
{

    public $request;
    public $id;
    private $menuItem;

    public function __construct(CategoryItem $menuItem)
    {
        $this->menuItem = $menuItem;
    }
    public function setRequest(Request $request , $id)
    {
        $this->request = $request;
        $this->id = $id;
        return $this;
    }

    public function setData()
    {
        $this->menuItem->category_id = $this->request->category_id;
        $this->menuItem->item = $this->request->body;
        return $this;
    }

    public function saveData()
    {
        $this->menuItem->save();
        return $this;
    }
}
