<?php


namespace App\Http\Services\Library;


abstract class GetRubric
{
    public function getRubric($param)
    {
        return $this->model::where('project_id', $this->token)//Определяем рубрику проекта
        ->where('id', $param)
            ->with([
                'text' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'category' . "." . 'text' => function($query) {
                    $query->where('project_id', $this->token);
                },
//                'category' . "." . 'product' => function($query) {
//                    $query->where('project_id', $this->token);
//                }, TODO удали
                'category' . "." . 'product' . "." . 'image' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'category' => function($query) {
                    $query->where('project_id', $this->token)
                        ->withCount('product');
                },
            ])
            ->get();
    }
}
