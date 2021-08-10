<?php


namespace App\Repository\Tools;


abstract class BackReturn
{
    public function back($msg)
    {
        return back()->with('msg_ok' , $msg);
    }

    public function backTo ($msg , $route)
    {
        return redirect($route)->with('msg_ok' ,$msg);
    }
}
