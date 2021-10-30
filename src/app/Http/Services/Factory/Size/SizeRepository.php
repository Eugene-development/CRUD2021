<?php


namespace App\Http\Services\Factory\Size;


use App\Http\Contracts\Size;
use App\Http\Services\Factory\Repository;

class SizeRepository extends Repository implements Size
{
    protected $path = 'Factory\Size';
}
