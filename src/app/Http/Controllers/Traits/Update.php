<?php


namespace App\Http\Controllers\Traits;


trait Update
{
    public function update()
    {
        $container = app();
        $container->make($this->entity)->update($this->param, $this->data);
        return $this->data;
    }
}
