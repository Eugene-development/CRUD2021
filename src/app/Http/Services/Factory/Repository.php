<?php


namespace App\Http\Services\Factory;


abstract class Repository
{
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
