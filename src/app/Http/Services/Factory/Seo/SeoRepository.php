<?php


namespace App\Http\Services\Factory\Seo;


use App\Http\Contracts\Seo;
use App\Http\Services\Factory\Repository;

class SeoRepository extends Repository implements Seo
{
    protected $path = 'Factory\Seo';
}
