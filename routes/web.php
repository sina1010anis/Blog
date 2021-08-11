<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\Blog\BlogController;
use \App\Http\Controllers\Comment\CommentController;
use \App\Http\Controllers\User\UserController;
use \App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class , 'index'])->name('index_page');
Route::post('/newBlog', [IndexController::class , 'newBlog'])->name('newBlog');

Route::prefix('/Iran-Blog/{dom}')->as('blog')->where(['dom' => '([0-9 a-z A-Z]+).([a-z A-Z]+)'])->group(function (){
    Route::get('/' , [BlogController::class,'index'])->name('.test');
    Route::get('/{Item}' , [BlogController::class,'show'])->name('.show');
    Route::post('/new/comment/{id}' , [CommentController::class,'new_comment'])->middleware('auth')->name('.new_comment');
    Route::post('/reply/comment/{id}' , [CommentController::class,'reply_comment'])->middleware('auth')->name('.reply_comment');
    Route::get('/menu/{name}' , [BlogController::class,'menu_select'])->name('menu_select');
});

Route::prefix('/Iran-Blog/{dom}/admin')->middleware(['auth' , 'CheckRoule'])->as('admin')->group(function (){
    Route::get('/index' , [AdminController::class,'index'])->name('.index');
    Route::get('/menus' , [AdminController::class,'setupMenu'])->name('.menu');
    Route::get('/category' , [AdminController::class,'setupCategory'])->name('.category');
    Route::get('/comments' , [AdminController::class,'setupComments'])->name('.comment');
    Route::get('/itemCategory' , [AdminController::class,'setupItemCategory'])->name('.itemCategory');
    Route::get('/banner' , [AdminController::class,'setupBanner'])->name('.setupBanner');
    Route::get('/item' , [AdminController::class,'setupItem'])->name('.setupItem');
    Route::post('/delete/menu' , [AdminController::class,'deleteMenu'])->name('.delete.menu');
    Route::get('/delete/item/{id}' , [AdminController::class,'deleteItem'])->name('.delete.item');
    Route::post('/delete/category' , [AdminController::class,'deleteCategory'])->name('.delete.category');
    Route::get('/delete/comment/{id}' , [AdminController::class,'deleteComment'])->name('.delete.comment');
    Route::get('/delete/replyComment/{id}' , [AdminController::class,'deleteReplyComment'])->name('.delete.replyComment');
    Route::post('/new/menu' , [AdminController::class,'newMenu'])->name('.new.menu');
    Route::post('/new/itemCategory' , [AdminController::class,'newItemCategory'])->name('.new.itemCategory');
    Route::post('/new/category' , [AdminController::class,'newCategory'])->name('.new.category');
    Route::post('/new/reply/comment' , [AdminController::class,'newReplyComment'])->name('.new.reply.comment');
    Route::post('/new/item/' , [AdminController::class,'newItem'])->name('.new.item');
    Route::post('/edit/blog' , [AdminController::class,'edit_blog'])->name('.edit_blog');
    Route::get('/edit/statusComment/{id}' , [AdminController::class,'edit_status_comment'])->name('.edit_status_comment');
});

Route::post('/like/comment/{id}' , [CommentController::class,'like_comment'])->middleware('auth')->name('like_comment');
Route::post('/search/item/' , [BlogController::class,'search_item'])->name('search_item');
Route::get('/google-login', [UserController::class , 'redirectToProvider'])->name('send.google');
Route::get('/callback', [UserController::class , 'handleProviderCallback'])->name('back.google');

Route::get('/logout',function(){
     auth()->logout();
})->name('logoutUser');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
