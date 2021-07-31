<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBlog extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

    public function new_item(){
        return $this->hasMany(NewBlog::class , 'new_item' , 'id');
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}
