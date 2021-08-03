<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBlog extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function blog(){
        return $this->belongsTo(Blog::class , 'blog_id' , 'id');
    }

    public function new_item(){
        return $this->hasMany(NewBlog::class , 'new_item' , 'id');
    }

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function menu()
    {
        return $this->belongsTo(MenuItem::class , 'menu_id' , 'id');
    }
}
