<?php


namespace App\Http\Services\Factory\Product;


use App\Http\Contracts\Product;
use App\Http\Services\Factory\Repository;

class ProductRepository extends Repository implements Product
{
    protected $path = 'Factory\Product';
}
