<?php


namespace App\Repository\DB\Admin\Category;


use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DeleteCategory implements \App\Repository\DB\Admin\Menu\MenuInterface\DeleteMenuInterface
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
            $this->item = Category::whereId($this->request->id)->get();
        }
        return $this;
    }

    public function checkCount()
    {
        if ($this->item->count() <= 0)
        {
            return 'error';
        }else{
            Category::find($this->request->id)->delete();
            return 'ok';
        }
    }
}
