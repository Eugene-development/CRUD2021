<?php


namespace App\Http\Services\Factory\Category;


use App\Http\Contracts\Category;
use App\Http\Services\Factory\Repository;

class CategoryRepository extends Repository implements Category
{
    protected $path = 'Factory\Category';
}
