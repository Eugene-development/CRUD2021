<?php


namespace App\Http\Controllers\Traits;


trait Create
{
    public function add()
    {
        $container = app();
        $response = $container->make($this->entity)->create($this->data);
        return $response;
    }
}
