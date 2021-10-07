<?php


namespace App\Http\Controllers\Seo;


use App\Http\Contracts\Seo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    protected $entity;

    function __construct(Request $request)
    {
        $this->entity = Seo::class;
        $this->param = $request->id;
    }

}
