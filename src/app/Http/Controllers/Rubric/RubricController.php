<?php


namespace App\Http\Controllers\Rubric;


use App\Http\Contracts\Rubric;
use App\Http\Controllers\Controller;

class RubricController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Rubric::class;
    }

}
