<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\NewBlog;
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
    public function show($dom,NewBlog $nameItem)
    {
        $name_domain = Blog::whereDomain($dom)->first();
        return view('front.section.show.show_'.$name_domain->style.'_style' , compact( 'name_domain' , 'nameItem'));
    }
}
