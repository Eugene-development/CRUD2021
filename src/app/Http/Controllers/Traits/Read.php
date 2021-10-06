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

    public function getSearch($search)
    {
        $container = app();
        $response = $container->make($this->entity)->getSearch($search);
        return new Resource($response);
    }

    public function getAll()
    {
        $container = app();
        $response = $container->make($this->entity)->getAll();
        return new Resource($response);
    }

    public function getAllHm()
    {
        $container = app();
        $response = $container->make($this->entity)->getAllHm();
        return new Resource($response);
    }

    public function getAllHmCount()
    {
        $container = app();
        $response = $container->make($this->entity)->getAllHmCount();
        return new Resource($response);
    }

    public function getAllHmHm()
    {
        $container = app();
        $response = $container->make($this->entity)->getAllHmHm();
        return new Resource($response);
    }

    public function getAllHmHmCount()
    {
        $container = app();
        $response = $container->make($this->entity)->getAllHmHmCount();
        return new Resource($response);
    }

    public function getWh($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWh($param);
        return new Resource($response);
    }

    public function getWhHm($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWhHm($param);
        return new Resource($response);
    }

    public function getWhHmCount($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWhHmCount($param);
        return new Resource($response);
    }

    public function getWhHmHm($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWhHmHm($param);
        return new Resource($response);
    }

    public function getWhHmHmCount($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getWhHmHmCount($param);
        return new Resource($response);
    }


    public function getCategoryHmHmpmHmpmCo($param)
    {
        $container = app();
        $response = $container->make($this->entity)->getCategoryHmHmpmHmpmCo($param);
        return new Resource($response);
    }


}
