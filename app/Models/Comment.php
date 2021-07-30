<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function new_item(){
        return $this->belongsTo(NewBlog::class , 'new_item' , 'id');
    }

    public function reply_comment(){
        return $this->hasMany(ReplyComment::class , 'comment_id' , 'id');
    }
}
