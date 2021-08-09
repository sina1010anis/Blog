<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function category_item(){
        return $this->hasMany(CategoryItem::class , 'category_id' , 'id');
    }

    public $timestamps = false;
}
