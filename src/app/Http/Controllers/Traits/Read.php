<?php


namespace App\Http\Controllers\Traits;


use Illuminate\Http\Resources\Json\JsonResource;

trait Read
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getOne($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getOne($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getAll(): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getAll();
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getSearch($search): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getSearch($search);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getWhere($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getWhere($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getMenu($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getMenu($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getHead($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getHead($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getRubric($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getRubric($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getCategory($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getCategory($param);
        return new JsonResource($response);
    }


    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getProduct($param): JsonResource
    {
        $container = app();
        $response = $container->make($this->entity)->getProduct($param);
        return new JsonResource($response);
    }


}
