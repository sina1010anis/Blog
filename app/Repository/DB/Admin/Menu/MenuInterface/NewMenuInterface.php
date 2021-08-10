<?php


namespace App\Repository\DB\Admin\Menu\MenuInterface;


use Illuminate\Http\Request;

interface NewMenuInterface
{
    public function setRequest(Request $request , $id);
    public function setData();
    public function saveData();
}
