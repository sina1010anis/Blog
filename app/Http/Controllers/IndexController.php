<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\NewBlog;
use App\Models\ReplyComment;
use Database\Factories\CommentFactory;
use Database\Factories\ReplyCommentFactory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @var \App\Repository\DB\Blog\NewBlog
     */
    private $newBlog;

    public function __construct(\App\Repository\DB\Blog\NewBlog $newBlog)
    {
        $this->newBlog = $newBlog;
    }

    public function index()
    {
        return view('welcome');
    }
    public function newBlog(Request $request)
    {
        return $this->newBlog->setData($request)->saveData()->back('');
    }
}
