<?php


namespace App\Http\Services\Library;


abstract class GetAll
{
    public function getAll()
    {
        return $this->model::where('project_id', $this->token)->get();
    }
}
