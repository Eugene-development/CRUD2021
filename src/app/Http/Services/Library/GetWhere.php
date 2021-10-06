<?php


namespace App\Http\Services\Library;


abstract class GetWhere
{
    public function getWhere($param)
    {
        return $this->model::where('project_id', $this->token)->where('id', $param)->all();
    }
}
