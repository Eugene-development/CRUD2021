<?php


namespace App\Http\Services\Library;


abstract class GetCategory
{
    public function getCategory($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with([
                'text' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'product' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'product' . "." . 'text' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'product' . "." . 'image' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'seo' => function($query) {
                    $query->where('project_id', $this->token);
                }
            ])
            ->withCount('product')
            ->get();
    }

}
