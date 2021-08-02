<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\NewBlog;
use App\Models\ReplyComment;
use Database\Factories\CommentFactory;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index($dom){
        $name_domain = Blog::whereDomain($dom)->first();
        $data=NewBlog::whereBlog_id($name_domain->id)->get();
        return view('front.section.style.page_'.$name_domain->style.'_style' , compact( 'name_domain' , 'data'));
    }
    public function show($dom,$Item)
    {
        $name_domain = Blog::whereDomain($dom)->first();
        $nameItem = NewBlog::where(['blog_id' => $name_domain->id , 'title' => $Item])->first();
        $comments = Comment::where('new_item' , $nameItem->id)->latest('id')->get();
        $replyComments = ReplyComment::latest()->get();
        return view('front.section.show.show_'.$name_domain->style.'_style' , compact( 'name_domain' ,'comments', 'nameItem','replyComments'));
    }
}
