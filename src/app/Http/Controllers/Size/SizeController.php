<?php


namespace App\Http\Controllers\Size;


use App\Http\Contracts\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    protected $entity;
    protected $param;
    protected $data;

    function __construct(Request $request)
    {
        $this->entity = Size::class;
        $this->param = $request->id;
        $this->data = [
            'project_id' => $request->bearerToken(),
            'product_id' => $request->product_id,
            'size' => $request->size,
        ];
    }

}
