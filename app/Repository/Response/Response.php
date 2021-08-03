<?php


namespace App\Repository\Response;


use App\Models\Blog;

class Response
{
    public function handle()
    {
        return [
            \Illuminate\Support\Facades\Response::macro('domain',function ($dom){
                return Blog::whereDomain($dom)->first();
            }),
        ];
    }
}
