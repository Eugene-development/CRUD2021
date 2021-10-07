<?php


namespace App\Http\Controllers\Head;


use App\Http\Contracts\Head;
use App\Http\Controllers\Controller;

class HeadController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Head::class;
    }

}
