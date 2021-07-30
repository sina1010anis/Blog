<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Database\Factories\CommentFactory;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Blog $dom){
        return view('front.section.style.page_'.$dom->style.'_style' , compact( 'dom'));
    }
}
