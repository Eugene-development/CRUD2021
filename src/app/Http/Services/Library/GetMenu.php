<?php


namespace App\Http\Services\Library;


abstract class GetMenu
{
    public function getMenu($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
//            ->with(['head' => function($query) {
//                $query->where('project_id', $this->token);
//            }])
            ->get();
    }

}
