<?php


namespace App\Http\Services\Factory\Menu;


use App\Http\Contracts\Menu;
use App\Http\Services\Factory\Repository;

class MenuRepository extends Repository implements Menu
{
    protected $path = 'Factory\Menu';
}
