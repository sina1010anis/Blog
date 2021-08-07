<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $attributes = ['google_id' => 'null'];

    public function banner(){
        return $this->hasMany(Banner::class , 'user_id' , 'id');
    }

    public function slider(){
        return $this->hasMany(Slider::class , 'user_id' , 'id');
    }

    public function new_blog(){
        return $this->hasMany(NewBlog::class , 'user_id' , 'id');
    }

    public function menu_item(){
        return $this->hasMany(MenuItem::class , 'user_id' , 'id');
    }

    public function key_word(){
        return $this->hasMany(KeyWord::class , 'user_id' , 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class , 'user_id' , 'id');
    }

    public function category(){
        return $this->hasMany(Category::class , 'category_id' , 'id');
    }
}
