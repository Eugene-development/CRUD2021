<?php


namespace App\Http\Services\Factory\Head;


use App\Http\Contracts\Head;
use App\Http\Services\Factory\Repository;

class HeadRepository extends Repository implements Head
{
    protected $path = 'Factory\Head';
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

}
