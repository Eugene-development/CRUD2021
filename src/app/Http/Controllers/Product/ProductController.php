<?php


namespace App\Http\Controllers\Product;


use App\Http\Contracts\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $entity;
    protected $param;
    protected $data;

    function __construct(Request $request)
    {
        $this->entity = Product::class;
        $this->param = $request->id;
        $this->data = [
            'project_id' => $request->bearerToken(),
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'unit' => $request->unit,
            'description' => $request->description
        ];// TODO size id
    }
}
