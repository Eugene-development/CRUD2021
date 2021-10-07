<?php


namespace App\Http\Services\Factory\Rubric;


use App\Http\Contracts\Rubric;
use App\Http\Services\Factory\Repository;

class RubricRepository extends Repository implements Rubric
{
    protected $path = 'Factory\Rubric';
}
