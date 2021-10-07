<?php


namespace App\Http\Controllers\Text;


use App\Http\Contracts\Text;
use App\Http\Controllers\Controller;

class TextController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Text::class;
    }

}
