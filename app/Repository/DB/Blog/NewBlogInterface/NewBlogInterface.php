<?php


namespace App\Repository\DB\Blog\NewBlogInterface;


use Illuminate\Http\Request;

interface NewBlogInterface
{
    public function setData(Request $request);
    public function saveData();
}
