<?php


namespace App\Http\Services\Factory;


abstract class Repository
{
    protected $serviceORM;
    protected $serviceOne;
    protected $serviceAll;
    protected $serviceWhere;
    protected $serviceSearch;
    protected $serviceCreate;
    protected $serviceUpdate;
    protected $serviceDelete;

    public function __construct()
    {
        $this->serviceORM    = app('App\Http\Services\\' . $this->path . '\ServiceORM');
        $this->serviceOne    = app('App\Http\Services\\' . $this->path . '\ServiceOne');
        $this->serviceAll    = app('App\Http\Services\\' . $this->path . '\ServiceAll');
        $this->serviceWhere  = app('App\Http\Services\\' . $this->path . '\ServiceWhere');
        $this->serviceSearch = app('App\Http\Services\\' . $this->path . '\ServiceSearch');
        $this->serviceCreate = app('App\Http\Services\\' . $this->path . '\ServiceCreate');
        $this->serviceUpdate = app('App\Http\Services\\' . $this->path . '\ServiceUpdate');
        $this->serviceDelete = app('App\Http\Services\\' . $this->path . '\ServiceDelete');
    }


    public function getOne($param)
    {
        return $this->serviceOne->getOne($param);
    }


    public function getAll()
    {
        return $this->serviceAll->getAll();
    }


    public function getWhere($param)
    {
        return $this->serviceWhere->getWhere($param);
    }


    public function getSearch($param)
    {
        return $this->serviceSearch->getSearch($param);
    }


    public function getMenu($param)
    {
        return $this->serviceORM->getMenu($param);
    }


    public function getHead($param)
    {
        return $this->serviceORM->getHead($param);
    }


    public function getRubric($param)
    {
        return $this->serviceORM->getRubric($param);
    }


    public function getCategory($param)
    {
        return $this->serviceORM->getCategory($param);
    }


    public function getSeo($param)
    {
        return $this->serviceORM->getSeo($param);
    }


    public function getText($param)
    {
        return $this->serviceORM->getText($param);
    }


    public function getProduct($param)
    {
        return $this->serviceORM->getProduct($param);
    }


    public function create($data)
    {
        return $this->serviceCreate->create($data);
    }


    public function update($id, $data)
    {
        return $this->serviceUpdate->update($id, $data);
    }


    public function delete($id)
    {
        return $this->serviceDelete->delete($id);
    }

}
