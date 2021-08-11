<?php


namespace App\Repository\DB\Delete\DeleteInterface;


interface DeleteInterface
{
    public function setModel($model);
    public function checkCount();
    public function delete();
}
