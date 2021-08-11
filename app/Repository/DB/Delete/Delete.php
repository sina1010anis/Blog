<?php


namespace App\Repository\DB\Delete;


use App\Models\NewBlog;
use App\Repository\DB\Delete\DeleteInterface\DeleteInterface;
use App\Repository\Tools\BackReturn;

class Delete extends BackReturn implements DeleteInterface
{
    protected $data;
    protected $status = false;
    public function setModel($model)
    {
        $this->data = $model;
        return $this;
    }

    public function checkCount()
    {
        if ($this->data->count() <= 0){
            $this->status = false;
        }elseif ($this->data->count() > 0){
            $this->status = true;
        }
        return $this;
    }

    public function delete()
    {
        if ($this->status){
            $this->data->delete();
            return back()->with('msg_ok' , 'Delete successfully');
        }else{
            return back()->with('msg_error' , 'Delete Failed');
        }
    }
}
