<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $attributes = ['like' => 0,'unlike' => 0,'status' => 0];
    public function new_item(){
        return $this->belongsTo(NewBlog::class , 'new_item' , 'id');
    }

    public function reply_comment(){
        return $this->hasMany(ReplyComment::class , 'comment_id' , 'id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class , 'blog_id' , 'id');
    }
}
