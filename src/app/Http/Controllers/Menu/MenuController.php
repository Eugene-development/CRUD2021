<?php


namespace App\Http\Controllers\Menu;


use App\Http\Contracts\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    protected $entity;

    function __construct(Request $request)
    {
        $this->entity = Menu::class;
        $this->param = $request->id;

        $this->data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ];

    }

}
