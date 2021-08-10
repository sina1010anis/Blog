<?php


namespace App\Repository\DB\Admin\Blog\InterfaceFile;


use Illuminate\Http\Request;

interface EditBlogInterface
{
    public function setData( Request $request);
    public function saveData();
}
