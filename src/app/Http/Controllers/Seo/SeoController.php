<?php


namespace App\Http\Controllers\Seo;


use App\Http\Contracts\Seo;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    protected $entity;

    function __construct()
    {
        $this->entity = Seo::class;
    }

}
