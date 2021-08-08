<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

    public function menu(){
        return $this->hasMany(MenuItem::class , 'blog_id' , 'id');
    }
    public function getRouteKeyName()
    {
        return 'domain';
    }
}
