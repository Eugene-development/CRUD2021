<?php


namespace App\Http\Services\Library;


abstract class GetProduct
{
    public function getProduct($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with([
                'category' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'image' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'text' => function($query) {
                    $query->where('project_id', $this->token);
                },
                'size' . "." . 'price' => function($query) {
                    $query->where('project_id', $this->token);
                },
            ])
            ->get();
    }

}
