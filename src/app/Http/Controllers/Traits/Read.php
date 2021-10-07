<?php


namespace App\Http\Controllers\Traits;

//TODO первая нестыковка
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Resource;

trait Read
{
    public function getOne($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getOne($param);
        return new JsonResource($response);
//        return new Resource($response);
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
        return new Resource($response);
    }


    public function getWhere($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWh($param);
        return new Resource($response);
    }

}
