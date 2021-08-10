<?php


namespace App\Repository\DB\Admin\Menu;


use App\Models\MenuItem;
use App\Repository\DB\Admin\Menu\MenuInterface\DeleteMenuInterface;
use App\Repository\Tools\BackReturn;
use Illuminate\Http\Request;

class DeleteMenu extends BackReturn implements DeleteMenuInterface
{
    protected $request;
    public $ajax = false;
    public $item;
    public $count = false;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function checkAjax()
    {
        if ($this->request->ajax()) {
            $this->ajax = true;
        }else{
            $this->ajax = false;
        }
        return $this;
    }

    public function setDate()
    {
        if ($this->ajax)
        {
            $this->item = MenuItem::whereId($this->request->id)->get();
        }
        return $this;
    }

    public function checkCount()
    {
        if ($this->item->count() <= 0)
        {
            return 'error';
        }else{
            MenuItem::find($this->request->id)->delete();
            return 'ok';
        }
    }

}
