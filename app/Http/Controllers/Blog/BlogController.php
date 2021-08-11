<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryItem;
use App\Models\Comment;
use App\Models\MenuItem;
use App\Models\NewBlog;
use App\Models\ReplyComment;
use Database\Factories\CommentFactory;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index($dom){
        $name_domain = response()->domain($dom);
        if ($name_domain == ''){
            abort(404);
        }else{
            $all_category = Category::whereBlog_id($name_domain->id)->get();
            $item_category = CategoryItem::all();
            $data=NewBlog::whereBlog_id($name_domain->id)->get();
            $menu = MenuItem::whereBlog_id($name_domain->id)->latest('id')->get();
            return view('front.section.style.page_'.$name_domain->style.'_style' , compact('all_category', 'item_category','menu','name_domain' , 'data'));
        }
    }
    public function show($dom,$Item)
    {
        $name_domain = response()->domain($dom);
        $nameItem = NewBlog::where(['blog_id' => $name_domain->id , 'title' => $Item])->first();
        $comments = Comment::where(['new_item' => $nameItem->id , 'status' => 1])->latest('id')->get();
        $replyComments = ReplyComment::latest()->get();
        return view('front.section.show.show_'.$name_domain->style.'_style' , compact( 'name_domain' ,'comments', 'nameItem','replyComments'));
    }

    public function menu_select($dom ,MenuItem $name)
    {
        $name_domain = response()->domain($dom);
        $all_category = Category::whereBlog_id($name_domain->id)->get();
        $data=NewBlog::whereBlog_id($name_domain->id)->whereMenu_id($name->id)->get();
        $menu = MenuItem::whereBlog_id($name_domain->id)->latest('id')->get();
        return view('front.section.style.page_'.$name_domain->style.'_style' , compact( 'all_category','menu','name_domain' , 'data'));
    }
    public function search_item(Request $request)
    {
        $new_blogs = NewBlog::where('title' , 'LIKE' , '%'.$request->data.'%')->get();
        $data = '';
        foreach ($new_blogs as $i)
        {
            $data.= '<span class="fl-right item-style-1">'.'<h1 dir="rtl" align="right" class="set-font">'
                .'<a href="'.route('blog.show' , ['dom' => $i->blog->domain , 'Item' => $i->title]).'">'.$i->title.'</a>'.
                '</h1>'
            .'<p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0">'.$i->created_at.'</p>'.
            '<span class="line fl-right"></span>'.
            '<span dir="rtl" align="right" class="set-font f-14 color-b-900">'.
            '<p>'.$i->body.'</p>'.'</span>'.'</span>';
        }
        return $data;
    }
}
 //64 line bef
