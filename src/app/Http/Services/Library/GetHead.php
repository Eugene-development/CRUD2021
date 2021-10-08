<?php


namespace App\Http\Services\Library;


abstract class GetHead
{
    public function getHead()
    {
        return $this->model::where('project_id', $this->token)
            ->with(['rubric' => function($query) {
                $query->where('project_id', $this->token);
            }])
            ->get();
    }
}
