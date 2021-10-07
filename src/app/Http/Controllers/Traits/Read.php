<?php


namespace App\Http\Controllers\Traits;

//TODO первая нестыковка
use Illuminate\Http\Resources\Json\JsonResource;

trait Read
{
    public function getOne($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getOne($param);
        return new JsonResource($response);
    }


    public function getAll()
    {
        $container = app();
        $response = $container->make($this->entity)->getAll();
        return new JsonResource($response);
    }


    public function getSearch($search)
    {
        $container = app();
        $response = $container->make($this->entity)->getSearch($search);
        return new JsonResource($response);
    }


    public function getWhere($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWh($param);
        return new JsonResource($response);
    }


    public function getHead($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getHead($param);
        return new JsonResource($response);
    }


}
