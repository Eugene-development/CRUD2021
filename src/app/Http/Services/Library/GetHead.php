<?php


namespace App\Http\Services\Library;


abstract class GetHead
{
    public function getHead($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with(['rubric' => function($query) {
                $query->where('project_id', $this->token);
            }])
            ->get();
    }
}
