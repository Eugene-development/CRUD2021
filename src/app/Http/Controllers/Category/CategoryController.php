<?php


namespace App\Http\Controllers\Category;


use App\Http\Contracts\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $entity;

    function __construct(Request $request)
    {
        $this->entity = Category::class;
        $this->param = $request->id;

    }

}
