<?php


namespace App\Http\Controllers\Text;


use App\Http\Contracts\Text;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextController extends Controller
{
    protected $entity;

    function __construct(Request $request)
    {
        $this->entity = Text::class;
        $this->param = $request->id;
    }

}
