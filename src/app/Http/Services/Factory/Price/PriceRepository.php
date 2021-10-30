<?php


namespace App\Http\Services\Factory\Price;


use App\Http\Contracts\Price;
use App\Http\Services\Factory\Repository;

class PriceRepository extends Repository implements Price
{
    protected $path = 'Factory\Price';
}
