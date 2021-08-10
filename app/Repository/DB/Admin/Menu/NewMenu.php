<?php


namespace App\Repository\DB\Admin\Menu;


use App\Models\MenuItem;
use App\Repository\DB\Admin\Menu\MenuInterface\NewMenuInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class NewMenu extends BackReturn implements NewMenuInterface
{
    public $request;
    public $id;
    private $menuItem;

    public function __construct(MenuItem $menuItem)
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
        $this->menuItem->blog_id = $this->id;
        $this->menuItem->name = $this->request->name;
        return $this;
    }

    public function saveData()
    {
        $this->menuItem->save();
        return $this;
    }
}
