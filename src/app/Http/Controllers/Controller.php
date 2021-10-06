<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Create;
use App\Http\Controllers\Traits\Delete;
use App\Http\Controllers\Traits\Read;
use App\Http\Controllers\Traits\Update;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Create, Read, Update, Delete;
}
