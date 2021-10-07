<?php


namespace App\Http\Controllers\Rubric;


use App\Http\Contracts\Rubric;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubricController extends Controller
{
    protected $entity;

    function __construct(Request $request)
    {
        $this->entity = Rubric::class;
        $this->param = $request->id;

    }

}
