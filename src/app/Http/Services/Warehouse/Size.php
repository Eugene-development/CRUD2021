<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Size
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Size';
        $this->token = $request->bearerToken();
    }

}
