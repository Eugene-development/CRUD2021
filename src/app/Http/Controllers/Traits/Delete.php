<?php


namespace App\Http\Controllers\Traits;


trait Delete
{
    public function delete()
    {
        $container = app();
        $container->make($this->entity)->delete($this->param);
        return $this->param;
    }
}
