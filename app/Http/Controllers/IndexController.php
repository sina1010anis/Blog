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
    public function index()
    {
        return view('welcome');
    }
}
