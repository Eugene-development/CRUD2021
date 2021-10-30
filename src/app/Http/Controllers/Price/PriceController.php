<?php


namespace App\Http\Controllers\Price;

use App\Http\Contracts\Price;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    protected $entity;
    protected $param;
    protected $data;

    function __construct(Request $request)
    {
        $this->entity = Price::class;
        $this->param = $request->id;
        $this->data = [
            'project_id' => $request->bearerToken(),
            'size_id' => $request->size_id,
            'price' => $request->price,
        ];
    }

}
