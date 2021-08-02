<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\Blog\BlogController;
use \App\Http\Controllers\Comment\CommentController;
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
Route::prefix('/Iran-Blog/{dom}')->as('blog')->where(['dom' => '([0-9 a-z A-Z]+).([a-z A-Z]+)'])->group(function (){
    Route::get('/' , [BlogController::class,'index'])->name('.test');
    Route::get('/{Item}' , [BlogController::class,'show'])->name('.show');
    Route::post('/new/comment/{id}' , [CommentController::class,'new_comment'])->name('.new_comment');
    Route::post('/reply/comment/{id}' , [CommentController::class,'reply_comment'])->name('.reply_comment');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
