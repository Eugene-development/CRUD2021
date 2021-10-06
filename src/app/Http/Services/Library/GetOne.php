<?php


namespace App\Http\Services\Library;


abstract class GetOne
{
    public function getOne($param)
    {
        return $this->model::where('project_id', $this->token)->where('id', $param)->get();
    }
}
