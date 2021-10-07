<?php


namespace App\Http\Services\Factory\Text;


use App\Http\Contracts\Text;
use App\Http\Services\Factory\Repository;

class TextRepository extends Repository implements Text
{
    protected $path = 'Factory\Text';
}
