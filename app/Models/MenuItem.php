<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $timestamps = false;
    public function blog(){
        return $this->belongsTo(Blog::class , 'blog_id' , 'id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
    public function new_blog()
    {
        return $this->hasMany(NewBlog::class , 'menu_id' , 'id');
    }

}
