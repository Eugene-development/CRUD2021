<?php


namespace App\Http\Services\Library;


class GetHead
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
