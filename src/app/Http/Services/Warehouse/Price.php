<?php


namespace App\Http\Services\Warehouse;


use Illuminate\Http\Request;

trait Price
{
    protected $model;
    protected $token;

    function __construct(Request $request)
    {
        $this->model = 'App\Models\Price';
        $this->token = $request->bearerToken();
    }

}
