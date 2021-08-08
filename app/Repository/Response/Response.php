<?php


namespace App\Repository\Response;


use App\Models\Blog;
use \Illuminate\Support\Facades\Response as RES;
class Response
{
    public function handle()
    {
        if (!auth()->check()){
            $select=RES::macro('dom_user',function (){
                return Blog::whereUser_id(auth()->user()->id)->first('user_id');
            });
        }else{
            $select=RES::macro('dom_user',function (){
                return 'Error';
            });
        }
        return [
            RES::macro('domain',function ($dom){
                return Blog::whereDomain($dom)->first();
            }),
             $select,
        ];
    }
}
