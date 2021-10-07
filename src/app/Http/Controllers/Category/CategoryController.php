<?php


namespace App\Http\Controllers\Category;


use App\Http\Contracts\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Category::class;
    }

}
