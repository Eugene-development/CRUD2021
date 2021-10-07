<?php


namespace App\Http\Services\Factory\Head;


use App\Http\Contracts\Head;
use App\Http\Services\Factory\Repository;

class HeadRepository extends Repository implements Head
{
    protected $path = 'Factory\Head';
}
